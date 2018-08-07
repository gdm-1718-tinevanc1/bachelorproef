@extends('layouts.app')

@section('title', 'Klachten')

@section('sidebar')
    @parent

@endsection

@section('content')
    <h5> Maak een klacht aan</h5>

    <form method="POST" action="/symptoms/{{ $symptom->id }}" enctype="multipart/form-data">
        {{ csrf_field() }}
        {{ method_field('PATCH') }}


        <div class="input-field col s12">
            <label for="title">Titel</label>
            <input type="text" class="form-control" id="title" name="title" value="{{$symptom->title}}" required >
        </div>

        <div class="input-field col s12">
          <textarea id="info" name="info" class="materialize-textarea" required>{{$symptom->info}}</textarea>
          <label for="info">Info</label>
        </div>

        <div class="file-field input-field col s6">
            <div class="btn">
                <span><i class="fas fa-images"></i></span>
                <input id="image" name="image[]" type="file" value="{{ old('image') }}"  multiple required>
            </div>
            <div class="file-path-wrapper">
                <input class="file-path validate" type="text" required>
            </div>
        </div>
        

        <div class="col s12">
            <button type="submit" class="btn btn-primary">Aanpassen</button>
        </div>
    </form>




    @include('layouts.errors')


@endsection
