@extends('layouts.app')

@section('title', 'Type behandelaar')

@section('sidebar')
    @parent

@endsection

@section('content')
    <h5> Maak een behandelaars type aan</h5>

    <form method="POST" action="/types/practitioners" enctype="multipart/form-data">
        {{ csrf_field() }}


        <div class="input-field col s12">
            <label for="name">Naam</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required >
        </div>

        <div class="input-field col s12">
            <label for="description">Beschrijving</label>
            <input type="text" class="form-control" id="description" name="description" value="{{ old('description') }}" required >
        </div>
       
        <div class="col s12">
            <button type="submit" class="btn btn-primary">Toevoegen</button>
        </div>
    </form>




    @include('layouts.errors')


@endsection
