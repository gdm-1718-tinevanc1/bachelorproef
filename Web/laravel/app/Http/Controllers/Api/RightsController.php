<?php

namespace EDS_site\Http\Controllers\Api;

use EDS_site\Models\Right;
use Illuminate\Http\Request;
use EDS_site\Http\Controllers\Controller;

class RightsController extends Controller
{
    public function index()
    {
        return Right::all();

    }

    public function filter($type)
    {
        return Right::whereHas('typeAgency', function ($q) use($type){
            $q->where('name', $type);
        })
            ->get();
    }

    public function show($id){

        $right = Right::find($id);

        return $right ?: response()
            ->json([
                'error' => "Right `${id}` not found",
            ])
            ->setStatusCode(Response::HTTP_NOT_FOUND);
    }
}
