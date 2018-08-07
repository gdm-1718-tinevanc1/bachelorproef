@extends('layouts.app')

@section('title', 'Manuele therapie')

@section('sidebar')
    @parent

@endsection

@section('content')
    <h5> Maak een manuele therapie aan</h5>

    <form method="POST" action="/exercisetherapies" enctype="multipart/form-data">
        {{ csrf_field() }}

        <div class="input-field col s12">
            <label for="title">Titel</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}" required >
        </div>

        <div class="input-field col s12">
            <label for="text">Tekst</label>
            <textarea type="text" class="form-control" id="text" name="text" value="{{ old('text') }}" required > </textarea>
        </div>

        <div class="col s12">
            <button type="submit" class="btn btn-primary">Toevoegen</button>
        </div>
    </form>




    @include('layouts.errors')


@endsection
