@extends('layouts.app')

@section('title', 'Manuele therapie')

@section('sidebar')
    @parent

@endsection

@section('content')
    <h5> Pas een manuele therapie aan</h5>

    <form method="POST" action="/manualtherapies/{{ $manualtherapy->id }}" enctype="multipart/form-data">
        {{ csrf_field() }}
        {{ method_field('PATCH') }}

        <div class="input-field col s12">
            <label for="title">Titel</label>
            <input type="text" class="form-control" id="title" name="title" value="{{$manualtherapy->title}}" required >
        </div>


        <div class="input-field col s12">
            <label for="text">Tekst</label>
            <textarea type="text" class="form-control" id="text" name="text" value="{{$manualtherapy->text}}" required > {{$manualtherapy->text}} </textarea>
        </div>


        <div class="col s12">
            <button type="submit" class="btn btn-primary">Aanpassen</button>
        </div>
    </form>




    @include('layouts.errors')


@endsection
