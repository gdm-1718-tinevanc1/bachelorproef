<?php

namespace EDS_site\Http\Controllers\Api;

use EDS_site\Models\TypeExercisesexample;
use Illuminate\Http\Request;
use EDS_site\Http\Controllers\Controller;

class TypeExercisesexamplesController extends Controller
{
    public function index()
    {
        return TypeExercisesexample::all();

    }
}
