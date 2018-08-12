<?php

namespace EDS_site\Http\Controllers;

use EDS_site\Models\Exercisesexample;
use EDS_site\Models\Image;
use EDS_site\Models\TypeExercisesexample;
use Illuminate\Http\Request;

class ExercisesexamplesController extends Controller
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
        $exercisesexamples = Exercisesexample::orderBy('created_at','desc')->paginate(10);
        return view('exercisesexamples.index', compact('exercisesexamples'));
    }

    public function show(Exercisesexample $exercisesexample){
        return view('exercisesexamples.show', compact('exercisesexample'));
    }

    public function create(){

        $type_exercisesexamples = TypeExercisesexample::all();

        return view('exercisesexamples.create', compact('type_exercisesexamples'));
    }


    public function store(Exercisesexample $exercisesexample, Request $request){

        $this->validate(request(), [
            'name' => 'required',
            'description' => 'required',
            'type_exercisesexample_id' => 'required'            
        ]);


        if ($request->has('image')) {
            $this->validate(request(), [
                'image.*' => 'image|mimes:jpeg,jpg,bmp,png,gif|max:2048'
            ]);
        }
        
        
        $exercisesexample = Exercisesexample::create([
            'name' => request('name'),
            'description' => request('description'),
            'type_exercisesexample_id' => request('type_exercisesexample_id')
        ]);


        if( $request->hasFile('image')) {
            foreach($request->file('image') as $image){

                $imageName = $image->getClientOriginalName();
                $path = base_path() . '/public/uploads/images/';
                $image->move($path, $imageName);
                $imageUrl = url('/').'/uploads/images/'.$imageName;

                Image::create([
                    'url' => $imageUrl,
                    'exercisesexample_id' => $exercisesexample->getAttribute('id')
                ]);
            }
        }

        session()->flash('message', 'Je hebt een oefeningsvoorbeeld toegevoegd.');
       return redirect('exercisesexamples');
    }

    public function edit($id)
    {
        $type_exercisesexamples = TypeExercisesexample::all();
        $exercisesexample = Exercisesexample::find($id);
        return view('exercisesexamples.edit', compact('exercisesexample', 'type_exercisesexamples'));
    }

    public function update(Request $request, $id)
    {
        $this->validate(request(),[
            'name' => 'required',
            'description' => 'required',
            'type_exercisesexample_id' => 'required'
        ]);

        if ($request->has('image')) {
            $this->validate(request(), [
                'image.*' => 'image|mimes:jpeg,jpg,bmp,png,gif|max:2048'
            ]);
        }


        $exercisesexample = Exercisesexample::find($id);
        $exercisesexample->name   = request('name');
        $exercisesexample->description = request('description');
        $exercisesexample->type_exercisesexample_id = request('type_exercisesexample_id');
        $exercisesexample->save();

        if( $request->hasFile('image')) {
            foreach($request->file('image') as $image){

                $imageName = $image->getClientOriginalName();
                $path = base_path() . '/public/uploads/images/';
                $image->move($path, $imageName);
                $imageUrl = url('/').'/uploads/images/'.$imageName;

                Image::create([
                    'url' => $imageUrl,
                    'exercisesexample_id' => $id
                ]);
            }
        }

        session()->flash('message', 'Je hebt een oefeningsvoorbeeld aangepast.');

        return redirect('exercisesexamples');
    }


    public function delete($id){

        $exercisesexample = Exercisesexample::find($id);
        return view('exercisesexamples.destroy', compact('exercisesexample'));
    }

    public function destroy($id){
        $exercisesexample = Exercisesexample::findOrFail($id);
        $exercisesexample->delete();

        session()->flash('message', 'Je hebt een oefeningsvoorbeeld verwijderd.');

        return redirect('exercisesexamples');
    }

    public function deleteImage($id){
        $image = Image::findOrFail($id);
        $image->delete();

        return redirect()->back();
    }
}
