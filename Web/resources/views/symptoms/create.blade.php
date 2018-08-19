@extends('layouts.app')

@section('title', 'Klachten')

@section('sidebar')
    @parent

@endsection

@section('content')
    <h5> Maak een klacht aan</h5>

    <form method="POST" action="/symptoms" enctype="multipart/form-data">
        {{ csrf_field() }}


        <div class="input-field col s12">
            <label for="title">Titel</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}" required >
        </div>

        <div class="input-field col s12">
          <textarea id="info" name="info" class="materialize-textarea" required>{{ old('info') }}</textarea>
          <label for="info">Info</label>
        </div>

         <div class="file-field input-field col s6">
            <div class="btn">
                <span><i class="fas fa-images"></i></span>
                <input id="image" name="image[]" type="file" value="{{ old('image') }}"  multiple>
            </div>
            <div class="file-path-wrapper">
                <input class="file-path validate" type="text">
            </div>
        </div>
        
        <div class="col s12">
            <button type="submit" class="btn btn-primary">Toevoegen</button>
        </div>
    </form>




    @include('layouts.errors')


@endsection
