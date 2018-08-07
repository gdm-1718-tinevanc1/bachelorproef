<?php

namespace EDS_site\Http\Controllers\Api;
use EDS_site\Models\Country;
use Illuminate\Http\Request;
use EDS_site\Http\Controllers\Controller;

class CountriesController extends Controller
{
    public function index()
    {
        return Country::all(); 
    }
    
}
