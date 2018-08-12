<?php

namespace EDS_site\Http\Controllers\Api;
use EDS_site\Models\Faq;
use Illuminate\Http\Request;
use EDS_site\Http\Controllers\Controller;

class FaqsController extends Controller
{
    public function index()
    {
        return Faq::all(); 

    }

    public function show($id){

        $device = Faq::find($id);

        return $device ?: response()
            ->json([
                'error' => "Question `${id}` not found",
            ])
            ->setStatusCode(Response::HTTP_NOT_FOUND);
    }
}
