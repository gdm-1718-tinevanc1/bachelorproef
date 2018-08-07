<?php

namespace EDS_site\Http\Controllers\Api;
use EDS_site\Models\Device;
use Illuminate\Http\Request;
use EDS_site\Http\Controllers\Controller;

class DevicesController extends Controller
{
    public function index()
    {
        return Device::all(); 

    }

    public function filter($type)
    {
        return Device::whereHas('typeDevices', function ($q) use($type){
            $q->where('name', $type);
        })
            ->with('images')
            ->with('typeAgency')
            ->with('typePractitioners')
            ->with('typeDevices')
            ->get();
    }


    public function show($id){

        $device = Device::with('images')
        ->with('typeAgency')
        ->with('typePractitioners')
        ->with('typeDevices')
        ->find($id);

        return $device ?: response()
            ->json([
                'error' => "Device `${id}` not found",
            ])
            ->setStatusCode(Response::HTTP_NOT_FOUND);
    }
}
