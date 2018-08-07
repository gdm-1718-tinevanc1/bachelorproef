<?php

namespace EDS_site\Http\Controllers;

use EDS_site\Models\Manualtherapy;
use Illuminate\Http\Request;

class ManualtherapiesController extends Controller
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
        $manualtherapies = Manualtherapy::orderBy('created_at','desc')->paginate(10);
        return view('manualtherapies.index', compact('manualtherapies'));
    }

    public function show(Manualtherapy $manualtherapy){
        return view('manualtherapies.show', compact('manualtherapy'));
    }

    public function create(){

        return view('manualtherapies.create');
    }


    public function store(Manualtherapy $manualtherapy){

        $this->validate(request(), [
            'title' => 'required',
            'text' => 'required',
        ]);


        Manualtherapy::create([
            'title' => request('title'),
            'text' => request('text'),
        ]);

        session()->flash('message', 'Je hebt een manuele therapie toegevoegd.');
        return redirect('manualtherapies');
    }

    public function edit($id)
    {
        $manualtherapy = Manualtherapy::find($id);
        return view('manualtherapies.edit', compact('manualtherapy'));
    }

    public function update(Request $request, $id)
    {
        $this->validate(request(),[
            'title' => 'required',
            'text' => 'required',
        ]);


        $manualtherapy = Manualtherapy::find($id);
        $manualtherapy->title   = request('title');
        $manualtherapy->text = request('text');
        $manualtherapy->save();

        session()->flash('message', 'Je hebt een manuele therapie aangepast.');

        return redirect('manualtherapies');
    }


    public function delete($id){

        $manualtherapy = Manualtherapy::find($id);
        return view('manualtherapies.destroy', compact('manualtherapy'));
    }

    public function destroy($id){
        $manualtherapy = Manualtherapy::findOrFail($id);
        $manualtherapy->delete();

        session()->flash('message', 'Je hebt een manuele therapie verwijderd.');

        return redirect('manualtherapies');
    }
}
