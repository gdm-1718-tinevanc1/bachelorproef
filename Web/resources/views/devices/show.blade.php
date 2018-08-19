@extends('layouts.app')

@section('title', 'Hulpmiddelen')

@section('content')

    <h1>{{ $device->name }}</h1>
   
    <h6>Doel:</h6>
    {{ $device->intention}}

    <h6>Procedure:</h6>
    {{ $device->procedure}}

    <!-- <h6>Instantie:</h6>
    {{ $device->typeAgency->name}} -->

    <h6>Types:</h6>
    @foreach($device->typeDevices as $types)
        {{$types->name}}
    @endforeach

    <div class="row">
        @foreach($device->images as $image)
            <div class="col s4"><img src="{{$image->url}}"></div>
        @endforeach
    </div>

@endsection
@include('layouts.editbar',['id' => $device->id])