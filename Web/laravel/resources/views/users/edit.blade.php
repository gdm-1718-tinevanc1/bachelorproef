@extends('layouts.app')

@section('title', 'Gebruikers')

@section('sidebar')
    @parent

@endsection

@section('content')
    <h5> Maak een hulpmiddel aan</h5>

    <form method="POST" action="/users/{{ $user->id }}" enctype="multipart/form-data">
        {{ csrf_field() }}
        {{ method_field('PATCH') }}

         <div class="input-field col s12">
            <label for="role_id">Rollen</label><p class="padding5"></p>
            <select class="browser-default" class="form-control" id="role_id" name="role_id[]" multiple required>
                <option value="" disabled selected>Kies een rol</option>
                @foreach($roles as $role)
                    <option value="{{$role->id}}">{{$role->name}}</option>
                @endforeach
            </select>
        </div>

    
        <div class="input-field col s12">
            <label for="username">Gebruikersnaam</label>
            <input type="text" class="form-control" id="username" name="username" value="{{$user->username}}" required >
        </div>

        <div class="input-field col s12">
            <label for="email">E-mailadres</label>
            <input type="text" class="form-control" id="email" name="email" value="{{$user->email}}" required >
        </div>

        <div class="input-field col s12">
            <label for="password">Wachtwoord</label>
            <input type="password" class="form-control" id="password" name="password" required >
        </div>

        <div class="input-field col s12">
            <label for="firstname">Voornaam</label>
            <input type="text" class="form-control" id="firstname" name="firstname" value="{{$user->profile->firstname}}" required >
        </div>

        <div class="input-field col s12">
            <label for="lastname">Achternaam</label>
            <input type="text" class="form-control" id="lastname" name="lastname" value="{{$user->profile->lastname}}" required >
        </div>

        <div class="input-field col s12">
            <label for="phonenumber">Telefoonnummer</label>
            <input type="text" class="form-control" id="phonenumber" name="phonenumber" value="{{$user->profile->phonenumber}}" required >
        </div>

        <div class="input-field col s12">
            <label for="rizivnumber">Riziv nummer (enkel voor behandelaars)</label>
            <input type="text" class="form-control" id="rizivnumber" name="rizivnumber" value="{{$user->profile->rizivnumber}}" required >
        </div>

        <div class="input-field col s12">
            <label for="function">Functie (enkel voor behandelaars)</label>
            <input type="text" class="form-control" id="function" name="function" value="{{$user->profile->function}}" required >
        </div>

        <div class="input-field col s12">
            <label for="street">Straat</label>
            <input type="text" class="form-control" id="street" name="street" value="{{$user->profile->location->street}}" required >
        </div>

        <div class="input-field col s12">
            <label for="housenumber">Huisnummer</label>
            <input type="text" class="form-control" id="housenumber" name="housenumber" value="{{$user->profile->location->housenumber}}" required >
        </div>

         <div class="input-field col s12">
            <label for="city">Stad</label>
            <input type="text" class="form-control" id="city" name="city" value="{{$user->profile->location->city}}" required >
        </div>
        <div class="input-field col s12">
            <label for="zipcode">Postcode</label>
            <input type="text" class="form-control" id="zipcode" name="zipcode" value="{{$user->profile->location->zipcode}}" required >
        </div>

        <div class="input-field col s12">
            <label for="country_id">Land</label><p class="padding5"></p>
            <select class="browser-default" class="form-control" id="country_id" name="country_id" value="{{$user->profile->location->country_id}}" required >
                <option value="" disabled selected>Kies jou land</option>
                @foreach($countries as $country)
                    <option @if($country->id == $user->profile->location->country_id) selected @endif value="{{$country->id}}">{{$country->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="col s12">
            <button type="submit" class="btn btn-primary">Aanpassen</button>
        </div>
    </form>




    @include('layouts.errors')


@endsection
