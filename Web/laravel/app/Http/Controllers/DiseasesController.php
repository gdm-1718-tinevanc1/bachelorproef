<?php

namespace EDS_site\Http\Controllers;

use EDS_site\Models\Disease;
use EDS_site\Models\CharacDisease;
use Illuminate\Http\Request;

class DiseasesController extends Controller
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
        $diseases = Disease::orderBy('created_at','desc')->paginate(10);
        return view('diseases.index', compact('diseases'));
    }

    public function show(Disease $disease){
        return view('diseases.show', compact('disease'));

    }

    public function create(){

        return view('diseases.create');
    }


    public function store(Disease $disease, Request $request){

        $this->validate(request(), [
            'title' => 'required',
            'shorttitle' => 'required',
            'description' => 'required'
        ]);


        $disease = Disease::create([
            'title' => request('title'),
            'shorttitle' => request('shorttitle'),
            'description' => request('description')
        ]);

        foreach($request->input('characDiseases') as $key => $value) {
            CharacDisease::create([
                'description' =>$value,
                'disease_id' => $disease->id,
            ]);
        }


        session()->flash('message', 'Je hebt een aandoening toegevoegd.');
        return redirect('/diseases');
    }

    public function edit($id)
    {
        $disease = Disease::find($id);
        return view('diseases.edit', compact('disease'));

    }

    public function update(Request $request, $id)
    {
        $this->validate(request(),[
            'title' => 'required',
            'shorttitle' => 'required',
            'description' => 'required'
        ]);


        $disease = Disease::find($id);
        $disease->title   = request('title');
        $disease->shorttitle   = request('shorttitle');
        $disease->description = request('description');
        $disease->save();

        session()->flash('message', 'Je hebt een aandoening aangepast.');

        return redirect('/diseases');

    }


    public function delete($id){

        $disease = Disease::find($id);
        return view('/diseases.destroy', compact('disease'));

    }

    public function destroy($id){
        $disease = Disease::findOrFail($id);
        $disease->delete();

        session()->flash('message', 'Je hebt een aandoening verwijderd.');

        return redirect('/diseases');
    }
}
