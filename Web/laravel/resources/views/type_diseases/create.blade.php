@extends('layouts.app')

@section('title', 'Type aandoening')

@section('sidebar')
    @parent

@endsection

@section('content')
    <h5> Maak een aandoenings type aan</h5>

    <form method="POST" action="/type_diseases" enctype="multipart/form-data">
        {{ csrf_field() }}


        <div class="input-field col s12">
            <label for="name">Naam</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required >
        </div>

        <div class="input-field col s12">
          <textarea id="info" name="info" class="materialize-textarea" required>{{old('info')}}</textarea>
          <label for="info">Info</label>
        </div>

        <div class="input-field col s12">
          <textarea id="criteria" name="criteria" class="materialize-textarea" >{{old('criteria')}}</textarea>
          <label for="criteria">Criteria</label>
        </div>

        <div class="input-field col s12">
          <textarea id="diagnose" name="diagnose" class="materialize-textarea" >{{old('diagnose')}}</textarea>
          <label for="diagnose">Diagnose</label>
        </div>

        <div class="col s12">
            <button type="submit" class="btn btn-primary">Toevoegen</button>
        </div>
    </form>




    @include('layouts.errors')


@endsection
