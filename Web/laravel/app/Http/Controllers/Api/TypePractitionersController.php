<?php

namespace EDS_site\Http\Controllers\Api;

use EDS_site\Models\TypePractitioner;
use Illuminate\Http\Request;
use EDS_site\Http\Controllers\Controller;

class TypePractitionersController extends Controller
{
    public function index()
    {
        return TypePractitioner::all();

    }

    public function show($id){

        $typePractitioner = TypePractitioner::find($id);

        return $typePractitioner ?: response()
            ->json([
                'error' => "Type practitioner `${id}` not found",
            ])
            ->setStatusCode(Response::HTTP_NOT_FOUND);
    }
}
