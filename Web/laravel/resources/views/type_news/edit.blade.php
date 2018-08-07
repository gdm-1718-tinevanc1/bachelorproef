@extends('layouts.app')

@section('title', 'Type nieuws')

@section('sidebar')
    @parent

@endsection

@section('content')
    <h5> Pas een nieuws type aan</h5>

    <form method="POST" action="/types/news/{{ $type_new->id }}" enctype="multipart/form-data">
        {{ csrf_field() }}
        {{ method_field('PATCH') }}

        <div class="input-field col s12">
            <label for="name">Naam</label>
            <input type="text" class="form-control" id="name" name="name" value="{{$type_new->name}}" required >
        </div>

        <div class="input-field col s12">
            <label for="description">Beschrijving</label>
            <input type="text" class="form-control" id="description" name="description" value="{{$type_new->description}}" required >
        </div>

        <div class="col s12">
            <button type="submit" class="btn btn-primary">Aanpassen</button>
        </div>
    </form>




    @include('layouts.errors')


@endsection
