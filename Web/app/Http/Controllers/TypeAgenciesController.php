<?php

namespace EDS_site\Http\Controllers;

use EDS_site\Models\TypeAgency;
use EDS_site\Models\Country;
use Illuminate\Http\Request;

class TypeAgenciesController extends Controller
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
        $type_agencies = TypeAgency::orderBy('created_at','desc')->paginate(10);
        return view('type_agencies.index', compact('type_agencies'));
    }

    public function create(){
        $countries = Country::all();
        return view('type_agencies.create', compact('countries'));
    }


    public function store(TypeAgency $typeagency){

        $this->validate(request(), [
            'name' => 'required',
            'description' => 'required',
            'country_id' => 'required',
        ]);


        TypeAgency::create([
            'name' => request('name'),
            'description' => request('description'),
            'country_id' => request('country_id')
        ]);

        session()->flash('message', 'Je hebt een instantie type toegevoegd.');
        return redirect('/types/agencies');
    }

    public function edit($id)
    {
        $countries = Country::all();
        $type_agency = TypeAgency::find($id);
        return view('type_agencies.edit', compact('type_agency', 'countries'));
    }

    public function update(Request $request, $id)
    {
        $this->validate(request(),[
            'name' => 'required',
            'description' => 'required',
            'country_id' => 'required',
        ]);


        $typeagency = TypeAgency::find($id);
        $typeagency->name   = request('name');
        $typeagency->description   = request('description');
        $typeagency->country_id = request('country_id');
        $typeagency->save();

        session()->flash('message', 'Je hebt een instantie type aangepast.');

        return redirect('/types/agencies');
    }


    public function delete($id){

        $type_agency = TypeAgency::find($id);
        return view('type_agencies.destroy', compact('type_agency'));
    }

    public function destroy($id){
        $typeagency = TypeAgency::findOrFail($id);
        $typeagency->delete();

        session()->flash('message', 'Je hebt een instantie type verwijderd.');

        return redirect('/types/agencies');
    }
}
