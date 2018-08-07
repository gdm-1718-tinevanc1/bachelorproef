<?php

namespace EDS_site\Http\Controllers;

use EDS_site\Models\Image;
use EDS_site\Models\Symptom;
use Illuminate\Http\Request;

class SymptomsController extends Controller
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
        $symptoms = Symptom::orderBy('created_at','desc')->paginate(10);
        return view('symptoms.index', compact('symptoms'));
    }

    public function show(Symptom $symptom){
        return view('symptoms.show', compact('symptom'));

    }

    public function create(){

        return view('symptoms.create');
    }


    public function store(Symptom $symptom, Request $request){

        $this->validate(request(), [
            'title' => 'required',
            'info' => 'required',
        ]);

        // location
        //type

        $symptom = new Symptom([
            'title' => request('title'),
            'info' => request('info'),
        ]);

        $symptom->save();

        if( $request->hasFile('image')) {
            foreach($request->file('image') as $image){
                $imageName = $request->file('image')->getClientOriginalName();
                $path = base_path() . '/public/uploads/images/';
                $request->file('image')->move($path, $imageName);
                $imageName = $request->file('image')->getClientOriginalName();
                $imageUrl = '/uploads/images/'.$imageName;

                Image::create([
                    'url' => $imageUrl,
                    'symptom_id' => $symptom->getAttribute('id')
                ]);
            }
        }

        session()->flash('message', 'Je hebt een klacht toegevoegd.');

        return redirect('/symptoms');
    }

    public function edit($id)
    {
        $symptom = Symptom::find($id);
        return view('symptoms.edit', compact('symptom'));

    }

    public function update(Request $request, $id)
    {
        $this->validate(request(),[
            'title' => 'required',
            'info' => 'required'
        ]);

        $symptom = Symptom::find($id);
        $symptom->title   = request('title');
        $symptom->info = request('info');
        $symptom->save();

        if( $request->hasFile('image')) {
            foreach($request->file('image') as $image){
                $imageName = $request->file('image')->getClientOriginalName();
                $path = base_path() . '/public/uploads/images/';
                $request->file('image')->move($path, $imageName);
                $imageName = $request->file('image')->getClientOriginalName();
                $imageUrl = '/uploads/images/'.$imageName;

                Image::create([
                    'url' => $imageUrl,
                    'symptom_id' => $id
                ]);
            }
        }

        session()->flash('message', 'Je hebt een klacht aangepast.');

        return redirect('/symptoms');
    }


    public function delete($id){

        $symptom = Symptom::find($id);
        return view('symptoms.destroy', compact('symptom'));

    }

    public function destroy($id){
        $symptom = Symptom::findOrFail($id);
        $symptom->delete();

        session()->flash('message', 'Je hebt een klacht verwijderd.');

        return redirect('/symptoms');
    }
}
