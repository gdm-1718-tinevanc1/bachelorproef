@extends('layouts.app')

@section('title', 'Behandelaars')

@section('sidebar')
    @parent

@endsection

@section('content')
    <h5> Maak een hulpmiddel aan</h5>

    <form method="POST" action="/practitioners/{{ $practitioner->id }}" enctype="multipart/form-data">
        {{ csrf_field() }}
        {{ method_field('PATCH') }}

        <div class="input-field col s12">
            <label for="firstname">Voornaam</label>
            <input type="text" class="form-control" id="firstname" name="firstname" value="{{$practitioner->firstname}}" required >
        </div>

        <div class="input-field col s12">
            <label for="lastname">Achternaam</label>
            <input type="text" class="form-control" id="lastname" name="lastname" value="{{$practitioner->lastname}}" required >
        </div>

        <div class="input-field col s12">
            <label for="clientele">Clienteel</label>
            <input type="text" class="form-control" id="clientele" name="clientele" value="{{$practitioner->clientele}}" required >
        </div>

        <div class="input-field col s12">
            <label for="phonenumber">Telefoonnummer</label>
            <input type="text" class="form-control" id="phonenumber" name="phonenumber" value="{{$practitioner->phonenumber}}" required >
        </div>

        <div class="input-field col s12">
            <label for="email">Email</label>
            <input type="text" class="form-control" id="email" name="email" value="{{$practitioner->email}}" required >
        </div>

        <div class="input-field col s12">
            <label for="rizivnumber">Riziv nummer</label>
            <input type="text" class="form-control" id="rizivnumber" name="rizivnumber" value="{{$practitioner->rizivnumber}}" required >
        </div>

        <div class="input-field col s12">
            <label for="type_practitioner_id">Type</label>
            <input type="text" class="form-control" id="type_practitioner_id" name="type_practitioner_id" value="{{$practitioner->type_practitioner_id}}" required >
        </div>

        <div class="input-field col s12">
            <label for="type_practitioner_id">Type</label><p class="padding5"></p>
            <select class="browser-default" class="form-control" id="type_practitioner_id" name="type_practitioner_id" value="{{$practitioner->type_practitioner_id}}" required >
                <option value="" disabled selected>Kies het type</option>
                @foreach($type_practitioners as $type_practitioner)
                    <option @if($type_practitioner->id == $practitioner->type_practitioner_id) selected @endif value="{{$type_practitioner->id}}">{{$type_practitioner->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="input-field col s12">
            <label for="street">Straat</label>
            <input type="text" class="form-control" id="street" name="street" value="{{$practitioner->location->street}}" required >
        </div>

        <div class="input-field col s12">
            <label for="housenumber">Huisnummer</label>
            <input type="text" class="form-control" id="housenumber" name="housenumber" value="{{$practitioner->location->housenumber}}" required >
        </div>

         <div class="input-field col s12">
            <label for="city">Stad</label>
            <input type="text" class="form-control" id="city" name="city" value="{{$practitioner->location->city}}" required >
        </div>
        <div class="input-field col s12">
            <label for="zipcode">Postcode</label>
            <input type="text" class="form-control" id="zipcode" name="zipcode" value="{{$practitioner->location->zipcode}}" required >
        </div>

        <div class="input-field col s12">
            <label for="country_id">Land</label><p class="padding5"></p>
            <select class="browser-default" class="form-control" id="country_id" name="country_id" value="{{$practitioner->location->country_id}}" required >
                <option value="" disabled selected>Kies jou land</option>
                @foreach($countries as $country)
                    <option  @if($country->id == $practitioner->location->country_id) selected @endif value="{{$country->id}}">{{$country->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="col s12">
            <button type="submit" class="btn btn-primary">Aanpassen</button>
        </div>
    </form>




    @include('layouts.errors')


@endsection
