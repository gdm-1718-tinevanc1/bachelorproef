<?php

namespace EDS_site\Http\Controllers;

use EDS_site\Models\AskPractitioner;
use EDS_site\Models\Practitioner;
use EDS_site\Models\TypePractitioner;
use EDS_site\Models\Location;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;
use EDS_site\Mail\PractitionerList;

class AskPractitionersController extends Controller
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

    public function index(){
        $askpractitioners = AskPractitioner::orderBy('created_at','desc')->paginate(10);

        return view('askpractitioners.index', compact('askpractitioners'));

    }

    public function show(AskPractitioner $askpractitioner, Request $request){

        $selectedPractitioners ;

        $selectedType = null;
        $selectedRegio = null;
        if($request->type_practitioner_id || $request->city){
            if($request->type_practitioner_id && $request->city){
                $selectedType = $request->type_practitioner_id;
                $selectedRegio = $request->city;

                if($request->type_practitioner_id == 'all' && $request->city == 'all' )
                    $practitioners = Practitioner::all(); 
                else if($request->type_practitioner_id == 'all')
                    $practitioners = Practitioner::whereHas('location', function ($q) use ($selectedRegio){$q->where('city', $selectedRegio);})->get();
                else if($request->city == 'all')
                    $practitioners = Practitioner::where('type_practitioner_id', '=', $selectedType)->get();
                else
                    $practitioners = Practitioner::with('location')->where('type_practitioner_id', '=', $selectedType)->whereHas('location', function ($q) use ($selectedRegio){$q->where('city', $selectedRegio);})->get();
            } else 
            if($request->type_practitioner_id){
                $selectedType = $request->type_practitioner_id;
                if($request->type_practitioner_id == 'all')
                    $practitioners = Practitioner::all(); 
                else 
                    $practitioners = Practitioner::where('type_practitioner_id', '=', $selectedType)->get();
            } else {
                $selectedRegio = $request->city;
                if($request->city == 'all')
                    $practitioners = Practitioner::all(); 
                else 
                    $practitioners = Practitioner::whereHas('location', function ($q) use ($selectedRegio){$q->where('city', $selectedRegio);})->get();            }
        } else{
            $practitioners = Practitioner::all();
        }

        $type_practitioners = TypePractitioner::all();
        $regions = Location::selectRaw('ANY_VALUE(id) as id, city')->groupBy('city')->get();

        return view('askpractitioners.show', compact('askpractitioner', 'practitioners', 'type_practitioners', 'regions', 'selectedType', 'selectedRegio'));

    }

    public function store(Request $request){
        $practitioners = array();
        $id = request('id');

        $askpractitioner = AskPractitioner::find($id);
        $regio = $askpractitioner->regio;
        $type = $askpractitioner->typePractitioner->name;
        $email = $askpractitioner->email;

        foreach (request('practitioner_id') as $practitioner){
            $practitioners[] = Practitioner::where('id', '=', $practitioner)->get();
        }
        
        Mail::to($email)->send(new PractitionerList($practitioners, $regio, $type));

        $askpractitioner->answered = true; 
        $askpractitioner->save();

        session()->flash('message', 'De mail is verstuurd.');

        return redirect('/askpractitioners');

    }
}
