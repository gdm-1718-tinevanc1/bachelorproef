<?php

namespace EDS_site\Http\Controllers\Api;

use EDS_site\Models\TypeAgency;
use Illuminate\Http\Request;
use EDS_site\Http\Controllers\Controller;

class TypeAgenciesController extends Controller
{
    public function index()
    {
        return TypeAgency::all();

    }

    public function filter($country_id)
    {
        return TypeAgency::where('country_id', $country_id)->get();

    }
}
