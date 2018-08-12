<?php

namespace EDS_site\Http\Controllers\Api;

use EDS_site\Models\TypeNew;
use Illuminate\Http\Request;
use EDS_site\Http\Controllers\Controller;

class TypeNewsController extends Controller
{
    public function index()
    {
        return TypeNew::all();

    }
}
