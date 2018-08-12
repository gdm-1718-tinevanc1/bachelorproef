<?php

namespace EDS_site\Http\Controllers;

use EDS_site\Models\TypeDisease;
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


    public function create(){

        return view('type_diseases.create');
    }


    public function store(Disease $typedisease){

        $this->validate(request(), [
            'name' => 'required'
        ]);

        if ($request->has('image')) {
            $this->validate(request(), [
                'image.*' => 'image|mimes:jpeg,jpg,bmp,png,gif|max:2048'
            ]);
        }

        TypeDisease::create([
            'name' => request('name'),
            'info' => request('info'),
            'criteria' => request('criteria'),
            'diagnose' => request('diagnose'),
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
        return redirect('/diseases/'. $typedisease->id);
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
                    'type_disease_id' => $id
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
