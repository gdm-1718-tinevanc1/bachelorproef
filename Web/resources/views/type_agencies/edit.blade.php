@extends('layouts.app')

@section('title', 'Type instantie')

@section('sidebar')
    @parent

@endsection

@section('content')
    <h5> Pas een instantie type aan</h5>

    <form method="POST" action="/types/agencies/{{ $type_agency->id }}" enctype="multipart/form-data">
        {{ csrf_field() }}
        {{ method_field('PATCH') }}

        <div class="input-field col s12">
            <label for="name">Naam</label>
            <input type="text" class="form-control" id="name" name="name" value="{{$type_agency->name}}" required >
        </div>

        <div class="input-field col s12">
          <textarea id="description" name="description" class="materialize-textarea" required>{{$type_agency->description}}</textarea>
          <label for="description">Beschrijving</label>
        </div>

        <div class="input-field col s12">
            <label for="country_id">Land</label><p class="padding5"></p>
            <select class="browser-default" class="form-control" id="country_id" name="country_id" value="{{$type_agency->country_id}}" required >
                <option value="" disabled selected>Kies jou land</option>
                @foreach($countries as $country)
                    <option @if($country->id == $type_agency->country_id) selected @endif value="{{$country->id}}">{{$country->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="col s12">
            <button type="submit" class="btn btn-primary">Aanpassen</button>
        </div>
    </form>




    @include('layouts.errors')


@endsection
