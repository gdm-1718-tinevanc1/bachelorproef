@extends('layouts.app')

@section('title', 'Rechten')

@section('content')

    <h1>{{ $right->name }}</h1>
   
    <h5>Doel:</h5>
    {{ $right->description}}

    <h5>Procedure:</h5>
    {{ $right->procedure}}

    <h5>Instantie:</h5>
    {{ $right->typeAgency->name}}

    <h5>Land</h5>
   {{$right->country->name}}
 


@endsection
@include('layouts.editbar',['id' => $right->id])