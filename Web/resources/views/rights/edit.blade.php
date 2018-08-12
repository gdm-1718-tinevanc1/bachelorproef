@extends('layouts.app')

@section('title', 'Rechten')

@section('sidebar')
    @parent

@endsection

@section('content')
    <h5> Maak een recht aan</h5>

    <form method="POST" action="/rights/{{ $right->id }}" enctype="multipart/form-data">
        {{ csrf_field() }}
        {{ method_field('PATCH') }}


        <div class="input-field col s12">
            <label for="name">Naam</label>
            <input type="text" class="form-control" id="name" name="name" value="{{$right->name}}" required >
        </div>


        <div class="input-field col s12">
          <textarea id="description" name="info" class="materialize-textarea" required>{{$right->description}}</textarea>
          <label for="description">Beschrijving</label>
        </div>

        <div class="input-field col s12">
            <label for="country_id">Land</label><p class="padding5"></p>
            <select class="browser-default" class="form-control" id="country_id" name="country_id" required >
                <option value="" disabled selected>Kies jou land</option>
                @foreach($countries as $country)
                    <option @if($country->id == $right->country_id) selected @endif value="{{$country->id}}">{{$country->name}}</option>
                @endforeach
            </select>
        </div>

         <div class="input-field col s12">
            <label for="type_agency_id">Instantie</label><p class="padding5"></p>
            <select class="browser-default" class="form-control" id="type_agency_id" name="type_agency_id" required >
                <option value="" disabled selected>Kies de instantie</option>
                @foreach($type_agencies as $type_agency)
                    <option @if($type_agency->id == $right->type_agency_id) selected @endif value="{{$type_agency->id}}">{{$type_agency->name}}</option>
                @endforeach
            </select>
        </div>



        <div class="col s12">
            <button type="submit" class="btn btn-primary">Aanpassen</button>
        </div>
    </form>




    @include('layouts.errors')


@endsection
