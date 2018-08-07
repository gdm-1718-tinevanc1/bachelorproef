@extends('layouts.app')

@section('title', 'Type aandoening')

@section('sidebar')
    @parent

@endsection

@section('content')
    <h5> Pas een aandoenings type aan</h5>

    <form method="POST" action="/type_diseases/{{ $typedisease->id }}" enctype="multipart/form-data">
        {{ csrf_field() }}
        {{ method_field('PATCH') }}

        <div class="input-field col s12">
            <label for="name">Naam</label>
            <input type="text" class="form-control" id="name" name="name" value="{{$type_disease->name}}" required >
        </div>

        <div class="input-field col s12">
          <textarea id="info" name="info" class="materialize-textarea" required>{{$type_disease->info}}</textarea>
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

        <div class="col s12">
            <button type="submit" class="btn btn-primary">Aanpassen</button>
        </div>
    </form>




    @include('layouts.errors')


@endsection
