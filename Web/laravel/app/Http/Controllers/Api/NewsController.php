<?php

namespace EDS_site\Http\Controllers\Api;
use EDS_site\Models\News;
use Illuminate\Http\Request;
use EDS_site\Http\Controllers\Controller;

class NewsController extends Controller
{
    public function index()
    {
        return News::orderBy('date','desc')
        ->with('typeNews')
        ->get(); 
    }

    public function last()
    {
        return News::orderBy('date','desc')->limit(1)->get(); 
    }

    public function filter($type)
    {
        return News::whereHas('typeNews', function ($q) use($type){
            $q->where('name', $type);
        })
            ->get();
    }

    public function show($id ){

        $news = News::find($id);

        return $news ?: response()
            ->json([
                'error' => "News `${id}` not found",
            ])
            ->setStatusCode(Response::HTTP_NOT_FOUND);
    }
}
