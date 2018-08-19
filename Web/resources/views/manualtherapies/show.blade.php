@extends('layouts.app')

@section('title', 'Manuele therapie')

@section('content')

    <h1>{{ $manualtherapy->title }}</h1>
    <p> {!!html_entity_decode($manualtherapy->text)!!}</p>
        
@endsection
@include('layouts.editbar',['id' => $manualtherapy->id])