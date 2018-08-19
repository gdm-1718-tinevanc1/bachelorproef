@extends('layouts.app')

@section('title', 'Type voorbeeldoefeningen')

@section('content')
    <h5> Verwijder een type voorbeeldoefeningen</h5>

    <form method="POST"  action="/types/exercisesexamples/{{ $type_exercisesexample->id }}">
        {{ csrf_field() }}
        {{ method_field('DELETE') }}

        Ben je zeker dat je dit type voorbeeldoefeningen wil verwijderen?

        <div class="col s12 delete">
            <button type="submit" class="btn btn-primary">Verwijderen</button>
        </div>
    </form>


    @include('layouts.errors')


@endsection