@extends('layouts.app')

@section('title', 'Voorbeeldoefeningen')

@section('content')
    <h5> Verwijder een voorbeeldoefeningen</h5>

    <form method="POST"  action="/exercisesexamples/{{ $exercisesexample->id }}">
        {{ csrf_field() }}
        {{ method_field('DELETE') }}

        Ben je zeker dat je dit voorbeeldoefeningen wil verwijderen?

        <div class="col s12 delete">
            <button type="submit" class="btn btn-primary">Verwijderen</button>
        </div>
    </form>


    @include('layouts.errors')


@endsection