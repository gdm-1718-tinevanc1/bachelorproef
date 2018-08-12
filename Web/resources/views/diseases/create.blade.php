@extends('layouts.app')

@section('title', 'Aandoeningen')

@section('sidebar')
    @parent

@endsection

@section('content')
    <h5> Maak een aandoening aan</h5>

    <form method="POST" action="/diseases" enctype="multipart/form-data">
        {{ csrf_field() }}


        <div class="input-field col s12">
            <label for="title">Titel</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}" required >
        </div>

         <div class="input-field col s12">
            <label for="shorttitle">Verkorte titel</label>
            <input type="text" class="form-control" id="shorttitle" name="shorttitle" value="{{ old('shorttitle') }}" required >
        </div>

        <div class="input-field col s12">
          <textarea id="description" name="description" class="materialize-textarea" required>{{old('description')}}</textarea>
          <label for="description">Beschrijving</label>
        </div>



        <div id="dynamic_field" class="input-field col s12">  
            <label for="characDiseases">Kenmerken</label>
            <input type="text" class="form-control" id="characDiseases" name="characDiseases[]">
        </div>
        <div class="input-field col s12">
            <button type="button" name="add" id="add" class="btn btn-success right" value="1"><i class="fa fa-plus"></i></button>
        </div>


        <div class="col s12">
            <button type="submit" class="btn btn-primary">Toevoegen</button>
        </div>
    </form>



    @include('layouts.errors')


@endsection
