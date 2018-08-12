@extends('layouts.app')

@section('title', 'Gebruikers')

@section('sidebar')
    @parent

@endsection

@section('content')
    <h5> Maak een hulpmiddel aan</h5>

    <form method="POST" action="/users" enctype="multipart/form-data">
        {{ csrf_field() }}


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
            <input type="text" class="form-control" id="username" name="username" value="{{ old('username') }}" required >
        </div>

        <div class="input-field col s12">
            <label for="email">E-mailadres</label>
            <input type="text" class="form-control" id="email" name="email" value="{{ old('email') }}" required >
        </div>

        <div class="input-field col s12">
            <label for="password">Wachtwoord</label>
            <input type="password" class="form-control" id="password" name="password" value="{{ old('password') }}" required >
        </div>

        <div class="input-field col s12">
            <label for="firstname">Voornaam</label>
            <input type="text" class="form-control" id="firstname" name="firstname" value="{{ old('firstname') }}" required >
        </div>

        <div class="input-field col s12">
            <label for="lastname">Achternaam</label>
            <input type="text" class="form-control" id="lastname" name="lastname" value="{{ old('lastname') }}" required >
        </div>

        <div class="input-field col s12">
            <label for="phonenumber">Telefoonnummer</label>
            <input type="text" class="form-control" id="phonenumber" name="phonenumber" value="{{ old('phonenumber') }}" required >
        </div>

        <div class="input-field col s12">
            <label for="rizivnumber">Riziv nummer (enkel voor behandelaars)</label>
            <input type="text" class="form-control" id="rizivnumber" name="rizivnumber" value="{{ old('rizivnumber') }}" required >
        </div>

         <div class="input-field col s12">
            <label for="function">Functie (enkel voor behandelaars)</label>
            <input type="text" class="form-control" id="function" name="function" value="{{ old('function') }}" required >
        </div>

        <div class="input-field col s12">
            <label for="street">Straat</label>
            <input type="text" class="form-control" id="street" name="street" value="{{ old('street') }}" required >
        </div>

        <div class="input-field col s12">
            <label for="housenumber">Huisnummer</label>
            <input type="text" class="form-control" id="housenumber" name="housenumber" value="{{ old('housenumber') }}" required >
        </div>

         <div class="input-field col s12">
            <label for="city">Stad</label>
            <input type="text" class="form-control" id="city" name="city" value="{{ old('city') }}" required >
        </div>
        <div class="input-field col s12">
            <label for="zipcode">Postcode</label>
            <input type="number" class="form-control" id="zipcode" name="zipcode" value="{{ old('zipcode') }}" required >
        </div>

        <div class="input-field col s12">
            <label for="country_id">Land</label><p class="padding5"></p>
            <select class="browser-default" class="form-control" id="country_id" name="country_id" required >
                <option value="" disabled selected>Kies jou land</option>
                @foreach($countries as $country)
                    <option value="{{$country->id}}">{{$country->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="col s12">
            <button type="submit" class="btn btn-primary">Toevoegen</button>
        </div>
    </form>




    @include('layouts.errors')


@endsection
