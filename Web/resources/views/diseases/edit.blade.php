@extends('layouts.app')

@section('title', 'Aandoeningen')

@section('sidebar')
    @parent

@endsection

@section('content')
    <h5> Pas een aandoening aan</h5>

    <form method="POST" action="/diseases/{{ $disease->id }}" enctype="multipart/form-data">
        {{ csrf_field() }}
        {{ method_field('PATCH') }}
    
        <div class="input-field col s12">
            <label for="title">Titel</label>
            <input type="text" class="form-control" id="title" name="title" value="{{$disease->title}}" required >
        </div>

        <div class="input-field col s12">
            <label for="shorttitle">Verkorte titel</label>
            <input type="text" class="form-control" id="shorttitle" name="shorttitle" value="{{$disease->shorttitle}}" required >
        </div>

        <div class="input-field col s12">
          <textarea id="description" name="description" class="materialize-textarea" required>{{$disease->description}}</textarea>
          <label for="description">Beschrijving</label>
        </div>


        <label for="characDiseases">Kenmerken</label>
        <div id="dynamic_field" class="input-field col s12">  
            @foreach($disease->characDiseases as $key => $charac)
               <div id="row{{$key}}"> <input type="text" class="form-control" id="characDiseases" value="{{$charac->description}}" name="characDiseases[]">
                <button type="button" name="remove" id="{{$key}}" class="btn btn-danger btn_remove right"><i class="fa fa-minus"></i></button></div>
            @endforeach
        </div>
        <div class="input-field col s12">
            <button type="button" name="add" id="add" class="btn btn-success right" value="{{count($disease->characDiseases)}}"><i class="fa fa-plus"></i></button>
        </div>

        <div class="col s12">
            <button type="submit" class="btn btn-primary">Aanpassen</button>
        </div>
    </form>




    @include('layouts.errors')


@endsection
