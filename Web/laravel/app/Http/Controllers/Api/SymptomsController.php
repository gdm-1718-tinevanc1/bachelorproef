<?php

namespace EDS_site\Http\Controllers\Api;

use EDS_site\Models\Symptom;
use Illuminate\Http\Request;
use EDS_site\Http\Controllers\Controller;

class SymptomsController extends Controller
{
    public function index()
    {
        return Symptom::all();

    }

    public function show($id){

        $symptom = Symptom::find($id);

        return $symptom ?: response()
            ->json([
                'error' => "Symptom `${id}` not found",
            ])
            ->setStatusCode(Response::HTTP_NOT_FOUND);
    }
}
