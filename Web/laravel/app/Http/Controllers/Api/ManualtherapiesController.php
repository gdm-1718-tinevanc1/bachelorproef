<?php

namespace EDS_site\Http\Controllers\Api;

use EDS_site\Models\Manualtherapy;
use Illuminate\Http\Request;
use EDS_site\Http\Controllers\Controller;

class ManualtherapiesController extends Controller
{
    public function index()
    {
        return Manualtherapy::all(); 

    }

    public function show($id){

        $manualtherapy = Manualtherapy::find($id);

        return $manualtherapy ?: response()
            ->json([
                'error' => "Manual therapy `${id}` not found",
            ])
            ->setStatusCode(Response::HTTP_NOT_FOUND);
    }
}
