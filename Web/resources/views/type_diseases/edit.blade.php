@extends('layouts.app')

@section('title', 'Type aandoening')

@section('sidebar')
    @parent

@endsection

@section('content')
    <h5> Pas een aandoenings type aan</h5>

    <form method="POST" action="/type_diseases/{{ $type_disease->id }}" enctype="multipart/form-data">
        {{ csrf_field() }}
        {{ method_field('PATCH') }}

        <div class="input-field col s12">
            <label for="name">Naam</label>
            <input type="text" class="form-control" id="name" name="name" value="{{$type_disease->name}}" required >
        </div>

        <div class="input-field col s12">
          <textarea id="info" name="info" class="materialize-textarea">{{$type_disease->info}}</textarea>
          <label for="info">Info</label>
        </div>

        <div class="input-field col s12">
          <textarea id="criteria" name="criteria" class="materialize-textarea" >{{$type_disease->criteria}}</textarea>
          <label for="criteria">Criteria</label>
        </div>

        <div class="input-field col s12">
          <textarea id="diagnose" name="diagnose" class="materialize-textarea" >{{$type_disease->diagnose}}</textarea>
          <label for="diagnose">Diagnose</label>
        </div>

         <div class="row">
            @foreach($type_disease->images as $image)
                <div class="col s4"><img src="{{$image->url}}">
                    <div class="btn--delete"><a href="/type_diseases/deleteImage/{{$image->id}}"><i class="fa fa-trash-alt"></i></a></div>            
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
