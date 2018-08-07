<?php

namespace EDS_site\Http\Controllers;

use EDS_site\Models\Image;
use EDS_site\Models\Device;
use EDS_site\Models\TypeDevices;
use EDS_site\Models\TypeDevice;
use EDS_site\Models\TypeAgency;
use Illuminate\Http\Request;

class DevicesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       $this->middleware(['admin', 'auth']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $devices = Device::orderBy('created_at','desc')->paginate(10);
        return view('devices.index', compact('devices'));
    }

    public function show(Device $device){
        return view('devices.show', compact('device'));

    }

    public function create(){

        $type_devices = TypeDevice::all();
        $type_agencies = TypeAgency::all();

        return view('devices.create', compact('type_devices', 'type_agencies'));
    }


    public function store(Device $device, Request $request){

        $this->validate(request(), [
            'name' => 'required',
            'intention' => 'required',
            'procedure' => 'required'
        ]);


        $device = Device::create([
            'name' => request('name'),
            'intention' => request('intention'),
            'procedure' => request('procedure')
        ]);

            
        if (is_array('type_device_id'))
        {
            foreach (request('type_device_id') as $typedevice){
                $device->typeDevices()->attach($typedevice);
            }
        }
        else{
            $device->typeDevices()->attach(request('type_device_id'));
        }

        if( $request->hasFile('image')) {
            foreach($request->file('image') as $image){
                $imageName = $request->file('image')->getClientOriginalName();
                $path = base_path() . '/public/uploads/images/';
                $request->file('image')->move($path, $imageName);
                $imageName = $request->file('image')->getClientOriginalName();
                $imageUrl = '/uploads/images/'.$imageName;

                Image::create([
                    'url' => $imageUrl,
                    'device_id' => $device->getAttribute('id')
                ]);
            }
        }

        session()->flash('message', 'Je hebt een hulpmiddel bewerkt.');
        return redirect('devices');
    }

    public function edit($id)
    {
        $type_devices = TypeDevice::all();
        $type_agencies = TypeAgency::all();
        $device = Device::find($id);
        return view('devices.edit', compact('device', 'type_devices', 'type_agencies'));

    }


    public function update(Request $request, $id)
    {
        $this->validate(request(), [
            'name' => 'required',
            'intention' => 'required',
            'procedure' => 'required',
        ]);

        $device = Device::find($id);
        $device->name   = request('name');
        $device->intention = request('intention');
        $device->procedure = request('procedure');
        $device->save();

        if (is_array('type_device_id'))
        {
            $device->typeDevices()->detach();
            foreach (request('type_device_id') as $typedevice){
                $device->typeDevices()->attach($typedevice);
            }
        }
        else{
            $device->typeDevices()->detach();
            $device->typeDevices()->attach(request('type_device_id'));
        }

        if( $request->hasFile('image')) {
            foreach($request->file('image') as $image){
                $imageName = $request->file('image')->getClientOriginalName();
                $path = base_path() . '/public/uploads/images/';
                $request->file('image')->move($path, $imageName);
                $imageName = $request->file('image')->getClientOriginalName();
                $imageUrl = '/uploads/images/'.$imageName;

                Image::create([
                    'url' => $imageUrl,
                    'device_id' => $id
                ]);
            }
        }

        session()->flash('message', 'Je hebt een hulpmiddel aangepast.');

        return redirect('/devices');

    }


    public function delete($id){

        $device = Device::find($id);
        return view('/devices.destroy', compact('device'));

    }

    public function destroy($id){
        $device = Device::findOrFail($id);
        $device->delete();

        session()->flash('message', 'Je hebt een hulpmiddel verwijderd.');

        return redirect('/devices');
    }
}
