@extends('layouts.app')

@section('title', 'Behandelaars')


@section('content')

    <h1>{{ $practitioner->firstname }}  {{ $practitioner->lastname }}</h1>
   
    <h5>Praktijk:</h5>
    {{ $practitioner->clientele}}

    <h5>Telefoonnummer:</h5>
    {{ $practitioner->phonenumber}}

    <h5>E-mail:</h5>
    {{ $practitioner->email}}

    <h5>Riziv nummer: </h5>
    {{ $practitioner->rizivnumber}}

    <h5>Adres: </h5>
    {{ $practitioner->location->street }} {{ $practitioner->location->housenumber }}
    {{ $practitioner->location->city }} {{ $practitioner->location->zipcode }}
    {{ $practitioner->location->country->name }}

    <h5>Functie: </h5>
     {{ $practitioner->typePractitioner->name }}


@endsection
@include('layouts.editbar',['id' => $practitioner->id])