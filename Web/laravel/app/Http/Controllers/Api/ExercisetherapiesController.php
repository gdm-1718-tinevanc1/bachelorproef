<?php

namespace EDS_site\Http\Controllers\Api;

use EDS_site\Models\Exercisetherapy;
use Illuminate\Http\Request;
use EDS_site\Http\Controllers\Controller;

class ExercisetherapiesController extends Controller
{
    public function index()
    {
        return Exercisetherapy::with('images')
        ->get(); 
    }

    public function filter($type)
    {
        return Exercisetherapy::whereHas('typeExercisetherapy', function ($q) use($type){
            $q->where('name', $type);
        })
            ->get();
    }

    public function show($id){

        $exercisetherapy = Exercisetherapy::find($id);

        return $exercisetherapy ?: response()
            ->json([
                'error' => "Right `${id}` not found",
            ])
            ->setStatusCode(Response::HTTP_NOT_FOUND);
    }
}
