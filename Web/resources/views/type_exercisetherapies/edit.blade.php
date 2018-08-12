@extends('layouts.app')

@section('title', 'Type oefeningtherapie')

@section('sidebar')
    @parent

@endsection

@section('content')
    <h5> Pas een oefeningtherapie type aan</h5>

    <form method="POST" action="/types/exercisetherapies/{{ $type_exercisetherapy->id }}" enctype="multipart/form-data">
        {{ csrf_field() }}
        {{ method_field('PATCH') }}

        <div class="input-field col s12">
            <label for="name">Naam</label>
            <input type="text" class="form-control" id="name" name="name" value="{{$type_exercisetherapy->name}}" required >
        </div>

        <div class="input-field col s12">
            <label for="description">Beschrijving</label>
            <input type="text" class="form-control" id="description" name="description" value="{{$type_exercisetherapy->description}}" required >
        </div>

        <div class="col s12">
            <button type="submit" class="btn btn-primary">Aanpassen</button>
        </div>
    </form>




    @include('layouts.errors')


@endsection
