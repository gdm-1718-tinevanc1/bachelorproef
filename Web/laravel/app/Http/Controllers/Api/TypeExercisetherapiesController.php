<?php

namespace EDS_site\Http\Controllers\Api;

use EDS_site\Models\TypeExercisetherapy;
use Illuminate\Http\Request;
use EDS_site\Http\Controllers\Controller;

class TypeExercisetherapiesController extends Controller
{
    public function index()
    {
        return TypeExercisetherapy::all();

    }
}
