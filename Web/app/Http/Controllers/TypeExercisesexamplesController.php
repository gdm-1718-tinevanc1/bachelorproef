<?php

namespace EDS_site\Http\Controllers;

use EDS_site\Models\TypeExercisesexample;
use Illuminate\Http\Request;

class TypeExercisesexamplesController extends Controller
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
        $type_exercisesexamples = TypeExercisesexample::orderBy('created_at','desc')->paginate(10);
        return view('type_exercisesexamples.index', compact('type_exercisesexamples'));
    }

    public function create(){

        return view('type_exercisesexamples.create');
    }


    public function store(TypeExercisesexample $typeexercisesexample){

        $this->validate(request(), [
            'name' => 'required',
            'description' => 'required',
        ]);


        TypeExercisesexample::create([
            'name' => request('name'),
            'description' => request('description')
        ]);

        session()->flash('message', 'Je hebt een oefeningsvoorbeeld type toegevoegd.');
        return redirect('/types/exercisesexamples');
    }

    public function edit($id)
    {
        $type_exercisesexample = TypeExercisesexample::find($id);
        return view('type_exercisesexamples.edit', compact('type_exercisesexample'));
    }

    public function update(Request $request, $id)
    {
        $this->validate(request(),[
            'name' => 'required',
            'description' => 'required',
        ]);


        $typeexercisesexample = TypeExercisesexample::find($id);
        $typeexercisesexample->name   = request('name');
        $typeexercisesexample->description = request('description');
        $typeexercisesexample->save();

        session()->flash('message', 'Je hebt een oefeningsvoorbeeld type aangepast.');

        return redirect('/types/exercisesexamples');
    }


    public function delete($id){

        $type_exercisesexample = TypeExercisesexample::find($id);
        return view('type_exercisesexamples.destroy', compact('type_exercisesexample'));
    }

    public function destroy($id){
        $typeexercisesexample = TypeExercisesexample::findOrFail($id);
        $typeexercisesexample->delete();

        session()->flash('message', 'Je hebt een oefeningsvoorbeeld type verwijderd.');

        return redirect('/types/exercisesexamples');
    }
}
