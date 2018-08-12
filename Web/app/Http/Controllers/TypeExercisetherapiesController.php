<?php

namespace EDS_site\Http\Controllers;

use EDS_site\Models\TypeExercisetherapy;
use Illuminate\Http\Request;

class TypeExercisetherapiesController extends Controller
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
        $type_exercisetherapies = TypeExercisetherapy::orderBy('created_at','desc')->paginate(10);
        return view('type_exercisetherapies.index', compact('type_exercisetherapies'));
    }

    public function create(){

        return view('type_exercisetherapies.create');
    }


    public function store(TypeExercisetherapy $typeexercisetherapy){

        $this->validate(request(), [
            'name' => 'required',
            'description' => 'required',
        ]);


        TypeExercisetherapy::create([
            'name' => request('name'),
            'description' => request('description')
        ]);

        session()->flash('message', 'Je hebt een oefeningstherapie type toegevoegd.');
        return redirect('/types/exercisetherapies');
    }

    public function edit($id)
    {
        $type_exercisetherapy = TypeExercisetherapy::find($id);
        return view('type_exercisetherapies.edit', compact('type_exercisetherapy'));
    }

    public function update(Request $request, $id)
    {
        $this->validate(request(),[
            'name' => 'required',
            'description' => 'required',
        ]);


        $typeexercisetherapy = TypeExercisetherapy::find($id);
        $typeexercisetherapy->name   = request('name');
        $typeexercisetherapy->description = request('description');
        $typeexercisetherapy->save();

        session()->flash('message', 'Je hebt een oefeningstherapie type aangepast.');

        return redirect('/types/exercisetherapies');
    }


    public function delete($id){

        $type_exercisetherapy = TypeExercisetherapy::find($id);
        return view('type_exercisetherapies.destroy', compact('type_exercisetherapy'));
    }

    public function destroy($id){
        $typeexercisetherapy = TypeExercisetherapy::findOrFail($id);
        $typeexercisetherapy->delete();

        session()->flash('message', 'Je hebt een oefeningstherapie type verwijderd.');

        return redirect('/types/exercisetherapies');
    }
}
