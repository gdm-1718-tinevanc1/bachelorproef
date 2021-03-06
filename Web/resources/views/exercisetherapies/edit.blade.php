@extends('layouts.app')

@section('title', 'Oefeningstherapie')

@section('sidebar')
    @parent

@endsection

@section('content')
    <h5> Pas een oefeningstherapie aan</h5>

    <form method="POST" action="/exercisetherapies/{{ $exercisetherapy->id }}" enctype="multipart/form-data">
        {{ csrf_field() }}
        {{ method_field('PATCH') }}

        <div class="input-field col s12">
            <label for="type_exercisetherapy_id">Type</label><p class="padding5"></p>
            <select class="browser-default" class="form-control" id="type_exercisetherapy_id" name="type_exercisetherapy_id" value="{{$exercisetherapy->type_exercisetherapy_id}}" required >
                <option value="" disabled selected>Kies het type</option>
                @foreach($type_exercisetherapies as $type_exercisetherapy)
                    <option @if($type_exercisetherapy->id == $exercisetherapy->type_exercisetherapy_id) selected @endif value="{{$type_exercisetherapy->id}}">{{$type_exercisetherapy->name}}</option>
                @endforeach
            </select>
        </div>

         <div class="input-field col s12">
          <textarea id="text" name="text" class="materialize-textarea" required>{{$exercisetherapy->text}}</textarea>
          <label for="text">Tekst</label>
        </div>


        <p>
            <label>
                <input @if($exercisetherapy->right == 'correct') checked @endif name="right" type="radio" value="correct" />
                <span>Goeie methode</span>
            </label>
            <label>
                <input @if($exercisetherapy->right == 'wrong') checked @endif  name="right" type="radio" value="wrong" />
                <span>Slechte methode</span>
            </label>
        </p>
    

        <div class="row">
            @foreach($exercisetherapy->images as $image)
                <div class="col s4"><img src="{{$image->url}}">
                    <div class="btn--delete"><a href="/exercisetherapies/deleteImage/{{$image->id}}"><i class="fa fa-trash-alt"></i></a></div>            
                </div>
            @endforeach
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
            <button type="submit" class="btn btn-primary">Aanpassen</button>
        </div>
    </form>




    @include('layouts.errors')


@endsection
