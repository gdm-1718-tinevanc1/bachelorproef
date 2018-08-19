@extends('layouts.app')

@section('title', 'Oefeningstherapie')

@section('sidebar')
    @parent

@endsection

@section('content')
    <h5> Maak een oefeningstherapie aan</h5>

    <form method="POST" action="/exercisetherapies" enctype="multipart/form-data">
        {{ csrf_field() }}

         <div class="input-field col s12">
            <label for="type_exercisetherapy_id">Type</label><p class="padding5"></p>
            <select class="browser-default" class="form-control" id="type_exercisetherapy_id" name="type_exercisetherapy_id" required >
                <option value="" disabled selected>Kies het type</option>
                @foreach($type_exercisetherapies as $type_exercisetherapy)
                    <option value="{{$type_exercisetherapy->id}}">{{$type_exercisetherapy->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="input-field col s12">
          <textarea id="text" name="text" class="materialize-textarea" required>{{old('text')}}</textarea>
          <label for="text">Tekst</label>
        </div>

         <p>
            <label>
                <input name="right" type="radio" />
                <span>Goeie methode</span>
            </label>
            <label>
                <input name="right" type="radio" />
                <span>Slechte methode</span>
            </label>
        </p>
    
        
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
