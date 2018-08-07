<?php

namespace EDS_site\Http\Controllers\Api;
use EDS_site\Models\Practitioner;
use Illuminate\Http\Request;
use EDS_site\Http\Controllers\Controller;

class PractitionersController extends Controller
{
    public function index()
    {
        return Practitioner::all();

    }

    public function show($id){

        $practitioner = Practitioner::find($id);

        return $practitioner ?: response()
            ->json([
                'error' => "Practitioner `${id}` not found",
            ])
            ->setStatusCode(Response::HTTP_NOT_FOUND);
    }
}
