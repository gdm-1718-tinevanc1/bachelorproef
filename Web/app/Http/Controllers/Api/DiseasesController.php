<?php

namespace EDS_site\Http\Controllers\Api;

use Illuminate\Http\Request;
use EDS_site\Http\Controllers\Controller;
use EDS_site\Models\Disease;

class DiseasesController extends Controller
{
    public function index()
    {
        return Disease::with('characDiseases')
        ->get(); 
    }

    public function show($id){

        $disease = Disease::with('typesDiseases')
        ->with('typesDiseases.images')
        ->with('characDiseases')
        ->with('sources')
        ->find($id);

        return $disease ?: response()
            ->json([
                'error' => "Disease `${id}` not found",
            ])
            ->setStatusCode(Response::HTTP_NOT_FOUND);
    }
}
