<?php

namespace EDS_site\Http\Controllers;

use EDS_site\Models\Image;
use EDS_site\Models\TypeDisease;
use EDS_site\Models\Disease;
use Illuminate\Http\Request;

class TypeDiseasesController extends Controller
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


    public function create($id){

        return view('type_diseases.create', compact('id'));
    }


    public function store($id, Request $request){

        $disease = Disease::find($id);

        $this->validate(request(), [
            'name' => 'required'
        ]);

        if ($request->has('image')) {
            $this->validate(request(), [
                'image.*' => 'image|mimes:jpeg,jpg,bmp,png,gif|max:2048'
            ]);
        }

        $typedisease = TypeDisease::create([
            'name' => request('name'),
            'info' => request('info'),
            'criteria' => request('criteria'),
            'diagnose' => request('diagnose'),
            'disease_id' => $disease->id
        ]);

        if( $request->hasFile('image')) {
            foreach($request->file('image') as $image){

                $imageName = $image->getClientOriginalName();
                $path = base_path() . '/public/uploads/images/';
                $image->move($path, $imageName);
                $imageUrl = url('/').'/uploads/images/'.$imageName;

                Image::create([
                    'url' => $imageUrl,
                    'type_disease_id' => $typedisease->getAttribute('id')
                ]);
            }
        }

        session()->flash('message', 'Je hebt een aandoening type toegevoegd.');
        return redirect('/diseases/'. $disease->id);
    }

    public function edit($id)
    {
        
        $type_disease = TypeDisease::find($id);
        return view('type_diseases.edit', compact('type_disease'));

    }

    public function update(Request $request, $id)
    {
        $this->validate(request(),[
            'name' => 'required'
        ]);

        if ($request->has('image')) {
            $this->validate(request(), [
                'image.*' => 'image|mimes:jpeg,jpg,bmp,png,gif|max:2048'
            ]);
        }

        $typedisease = TypeDisease::find($id);
        $typedisease->name   = request('name');
        $typedisease->info = request('info');
        $typedisease->criteria = request('criteria');
        $typedisease->diagnose = request('diagnose');
        $typedisease->save();


        if( $request->hasFile('image')) {
            foreach($request->file('image') as $image){

                $imageName = $image->getClientOriginalName();
                $path = base_path() . '/public/uploads/images/';
                $image->move($path, $imageName);
                $imageUrl = url('/').'/uploads/images/'.$imageName;

                Image::create([
                    'url' => $imageUrl,
                    'type_disease_id' => $typedisease->id
                ]);
            }
        }

        session()->flash('message', 'Je hebt een aandoening type aangepast.');

        return redirect('/diseases/'. $typedisease->disease_id);

    }


    public function delete($id){

        $typedisease = TypeDisease::find($id);
        return view('type_diseases.destroy', compact('typedisease'));

    }

    public function destroy($id){
        $typedisease = TypeDisease::find($id);
        $typedisease->delete();

        session()->flash('message', 'Je hebt een aandoening type verwijderd.');

        return redirect('/diseases/'. $typedisease->disease_id);
    }

    public function deleteImage($id){
        $image = Image::findOrFail($id);
        $image->delete();

        return redirect()->back();
    }
}
