<?php

namespace EDS_site\Http\Controllers;

use EDS_site\Models\TypeDevice;
use Illuminate\Http\Request;

class TypeDevicesController extends Controller
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

    public function index()
    {
        $type_devices = TypeDevice::orderBy('created_at','desc')->paginate(10);
        return view('type_devices.index', compact('type_devices'));
    }

    public function create(){

        return view('type_devices.create');
    }


    public function store(TypeDevice $typedevice){

        $this->validate(request(), [
            'name' => 'required',
        ]);


        TypeDevice::create([
            'name' => request('name'),
        ]);

        session()->flash('message', 'Je hebt een hulpmiddel type toegevoegd.');
        return redirect('/types/devices');
    }

    public function edit($id)
    {
        $type_device = TypeDevice::find($id);
        return view('type_devices.edit', compact('type_device'));
    }

    public function update(Request $request, $id)
    {
        $this->validate(request(),[
            'name' => 'required',
        ]);


        $typedevice = TypeDevice::find($id);
        $typedevice->name   = request('name');
        $typedevice->save();

        session()->flash('message', 'Je hebt een hulpmiddel type aangepast.');

        return redirect('/types/devices');
    }


    public function delete($id){

        $type_device = TypeDevice::find($id);
        return view('type_devices.destroy', compact('type_device'));
    }

    public function destroy($id){
        $typedevice = TypeDevice::findOrFail($id);
        $typedevice->delete();

        session()->flash('message', 'Je hebt een hulpmiddel type verwijderd.');

        return redirect('/types/devices');
    }

    public function deleteImage($id){
        $image = Image::findOrFail($id);
        $image->delete();

        return redirect()->back();
    }
}
