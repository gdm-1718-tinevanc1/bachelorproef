<?php

namespace EDS_site\Http\Controllers\Api;

use EDS_site\Models\Exercisesexample;
use Illuminate\Http\Request;
use EDS_site\Http\Controllers\Controller;

class ExercisesexamplesController extends Controller
{
    public function index()
    {
        return Exercisesexample::with('images')
        ->get(); 

    }

    public function filter($type)
    {
        return Exercisesexample::whereHas('typeExercisesexample', function ($q) use($type){
            $q->where('name', $type);
        })
            ->get();
    }

    public function show($id){

        $exercisesexample = Exercisesexample::find($id);

        return $exercisesexample ?: response()
            ->json([
                'error' => "Right `${id}` not found",
            ])
            ->setStatusCode(Response::HTTP_NOT_FOUND);
    }
}
