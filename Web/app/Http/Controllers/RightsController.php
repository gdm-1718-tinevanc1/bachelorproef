<?php

namespace EDS_site\Http\Controllers;

use EDS_site\Models\Right;
use EDS_site\Models\Country;
use EDS_site\Models\TypeAgency;
use Illuminate\Http\Request;

class RightsController extends Controller
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
        $rights = Right::orderBy('created_at','desc')->paginate(10);
        return view('rights.index', compact('rights'));
    }

    public function show(Right $right){
        return view('rights.show', compact('right'));

    }


    public function create(){
        $countries = Country::all();
        $type_agencies = TypeAgency::all();
        return view('rights.create',  compact('countries', 'type_agencies'));
    }

    public function store(Right $right){

        $this->validate(request(), [
            'name' => 'required',
            'description' => 'required',
            'type_agency_id' => 'required',
            'country_id' => 'required',
        ]);

        // location
        //type

        Right::create([
            'name' => request('name'),
            'description' => request('description'),
            'type_agency_id' => request('type_agency_id'),
            'country_id' => request('country_id')
        ]);

        session()->flash('message', 'Je hebt een recht toegevoegd.');

        return redirect('/rights');
    }

    public function edit($id)
    {   
        $countries = Country::all();
        $type_agencies = TypeAgency::all();
        $right = Right::find($id);
        return view('rights.edit', compact('right', 'countries', 'type_agencies'));

    }

    public function update(Request $request, $id)
    {
        $this->validate(request(), [
            'name' => 'required',
            'description' => 'required',
            'type_agency_id' => 'required',
            'country_id' => 'required'
        ]);

        $right = RequestModel::find($id);
        $right->name   = request('name');
        $right->description = request('description');
        $right->type_agency_id = request('type_agency_id');
        $right->country_id = request('country_id');
        $right->save();

        session()->flash('message', 'Je hebt een recht aangepast.');

        return redirect('/rights');

    }


    public function delete($id){

        $right = Right::find($id);
        return view('rights.destroy', compact('right'));

    }

    public function destroy($id){
        $right = Right::findOrFail($id);
        $right->delete();

        session()->flash('message', 'Je hebt een recht verwijderd.');

        return redirect('/rights');
    }
}
