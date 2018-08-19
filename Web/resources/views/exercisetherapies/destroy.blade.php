@extends('layouts.app')

@section('title', 'Oefeningstherapie')

@section('content')
    <h5> Verwijder een oefeningstherapie</h5>

    <form method="POST"  action="/exercisetherapies/{{ $exercisetherapy->id }}">
        {{ csrf_field() }}
        {{ method_field('DELETE') }}

        Ben je zeker dat je dit oefeningstherapie wil verwijderen?

        <div class="col s12 delete">
            <button type="submit" class="btn btn-primary">Verwijderen</button>
        </div>
    </form>


    @include('layouts.errors')


@endsection