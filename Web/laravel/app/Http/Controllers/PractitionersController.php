<?php

namespace EDS_site\Http\Controllers;

use EDS_site\Models\Country;
use EDS_site\Models\Practitioner;
use EDS_site\Models\TypePractitioner;
use EDS_site\Models\Location;
use Illuminate\Http\Request;

class PractitionersController extends Controller
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
    public function index(Request $request)
    {
        $sort = $request->input('sort');

        switch($sort) {
            case 'lastname':
                $practitioners = Practitioner::orderBy('lastname','asc')->paginate(15);
                break;
            case 'type_practitioner':
                $practitioners =  Practitioner::join('type_practitioners', 'practitioners.type_practitioner_id', '=', 'type_practitioners.id')->orderBy('type_practitioners.name', 'asc')->select('practitioners.*')->paginate(10);
                break;
            case 'country':
                $practitioners =  Practitioner::join('locations', 'practitioners.location_id', '=', 'locations.id')->join('countries', 'locations.country_id', '=', 'countries.id')->orderBy('countries.name', 'asc')->select('practitioners.*')->paginate(10);
                break;
            case 'city':
                $practitioners =  Practitioner::join('locations', 'practitioners.location_id', '=', 'locations.id')->orderBy('locations.city', 'asc')->select('practitioners.*')->paginate(10);
                break;
            default:
                $practitioners = Practitioner::orderBy('created_at','desc')->paginate(15);
        }

        return view('practitioners.index', compact('practitioners'));
    }
    // public function index()
    // {
    //     $practitioners = Practitioner::orderBy('created_at','desc')->paginate(10);
    //     return view('practitioners.index', compact('practitioners'));
    // }

    public function show(Practitioner $practitioner){
        return view('practitioners.show', compact('practitioner'));

    }

    public function create(){
        $countries = Country::all();
        $type_practitioners = TypePractitioner::all();

        return view('practitioners.create', compact('countries', 'type_practitioners'));
    }

    public function store(Practitioner $practitioner){

        $this->validate(request(), [
            'firstname' => 'required',
            'lastname' => 'required',
            'clientele' => 'required',
            'email' => 'required',
            'phonenumber' => 'required',
            'rizivnumber' => 'required',
            'type_practitioner_id' => 'required',
            'street' => 'required',
            'housenumber' => 'required',
            'zipcode' => 'required',
            'city' => 'required',
            'country_id' => 'required'
        ]);

        $location = new Location([
            'street' => request('street'),
            'housenumber' => request('housenumber'),
            'zipcode' => request('zipcode'),
            'city' => request('city'),
            'country_id' => request('country_id')
        ]);
        $location->save();
        $location_id = $location->getAttribute('id');

        $practitioner = new Practitioner([
            'firstname' => request('firstname'),
            'lastname' => request('lastname'),
            'clientele' => request('clientele'),
            'email' => request('email'),
            'phonenumber' => request('phonenumber'),
            'rizivnumber' => request('rizivnumber'),
            'location_id' => $location_id,
            'type_practitioner_id' => request('type_practitioner_id')
        ]);

        $practitioner->save();

        session()->flash('message', 'Je hebt een behandelaar toegevoegd.');

        return redirect('/practitioners');
    }

    public function edit($id)
    {
        $countries = Country::all();
        $type_practitioners = TypePractitioner::all();
        $practitioner = Practitioner::find($id);
        return view('practitioners.edit', compact('practitioner', 'countries', 'type_practitioners'));

    }

    public function update(Request $request, $id)
    {
        $this->validate(request(), [
            'firstname' => 'required',
            'lastname' => 'required',
            'clientele' => 'required',
            'email' => 'required',
            'phonenumber' => 'required',
            'rizivnumber' => 'required',
            'type_practitioner_id' => 'required'
        ]);


        $practitioner = Practitioner::findOrFail($id);
        $practitioner->firstname   = request('firstname');
        $practitioner->lastname = request('lastname');
        $practitioner->clientele = request('clientele');
        $practitioner->email = request('email');
        $practitioner->phonenumber = request('phonenumber');
        $practitioner->rizivnumber = request('rizivnumber');
        $practitioner->type_practitioner_id = request('type_practitioner_id');
        $practitioner->save();

        $location = Location::where('id', '=', $practitioner->location_id)->first();
        $location->street   = request('street');
        $location->housenumber = request('housenumber');
        $location->zipcode = request('zipcode');
        $location->city = request('city');
        $location->country_id = request('country_id');
        $location->save();

        session()->flash('message', 'Je hebt een behandelaar aangepast.');

        return redirect('/practitioners');
    }


    public function delete($id){

        $practitioner = Practitioner::find($id);
        return view('practitioners.destroy', compact('practitioner'));

    }

    public function destroy($id){
        $practitioner = Practitioner::findOrFail($id);
        $practitioner->delete();

        session()->flash('message', 'Je hebt een behandelaar verwijderd.');

        return redirect('/practitioners');
    }
}
