<?php

namespace EDS_site\Http\Controllers\Api;

use EDS_site\Models\AskPractitioner;
use Illuminate\Http\Request;
use EDS_site\Http\Controllers\Controller;

class AskPractitionersController extends Controller
{
    public function index()
    {
        return AskPractitioner::all();

    }

    public function show($id){

        $askPractitioner = AskPractitioner::find($id);

        return $askPractitioner ?: response()
            ->json([
                'error' => "Ask practitioner `${id}` not found",
            ])
            ->setStatusCode(Response::HTTP_NOT_FOUND);
    }

    public function store(AskPractitioner $askPractitioner, Request $request){
        $this->validate(request(), [
            'regio' => 'required',
            'email' => 'required',
            'type_practitioner_id' => 'required',
        ]);


        $askPractitioner = new AskPractitioner([
            'regio' => request('regio'),
            'email' => request('email'),
            'answered' => false,
            'type_practitioner_id' => request('type_practitioner_id'),
        ]);

        if ($askPractitioner->save()) {
            return response()
                ->json($askPractitioner);
            //     // ->setStatusCode(Response::HTTP_CREATED);
        }
    }
}
