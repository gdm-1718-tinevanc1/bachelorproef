@extends('layouts.app')

@section('title', 'Hulpmiddelen')

@section('content')

    <h1>{{ $device->name }}</h1>
   
    <h5>Doel:</h5>
    {{ $device->intention}}

    <h5>Procedure:</h5>
    {{ $device->procedure}}

    <h5>Instantie:</h5>
    {{ $device->typeAgency->name}}

    <h5>Types:</h5>
    @foreach($device->typeDevices as $types)
        {{$types->name}}
    @endforeach

    <h5>Voorgeschreven door</h5>
    @foreach ($device->typePractitioners as $type)
        {{ $type->name }}
    @endforeach

    <div class="row">
        @foreach($device->images as $image)
            <div class="col s4"><img src="{{$image->url}}"></div>
        @endforeach
    </div>

@endsection
@include('layouts.editbar',['id' => $device->id])