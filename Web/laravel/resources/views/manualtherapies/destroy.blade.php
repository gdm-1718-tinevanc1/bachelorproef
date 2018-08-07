@extends('layouts.app')

@section('title', 'Manuele therapie')

@section('content')
    <h5> Verwijder een manuele therapie</h5>

    <form method="POST"  action="/exercisetherapies/{{ $exercisetherapy->id }}">
        {{ csrf_field() }}
        {{ method_field('DELETE') }}

        Ben je zeker dat je dit manuele therapie wil verwijderen?

        <div class="col s12">
            <button type="submit" class="btn btn-primary">Verwijderen</button>
        </div>
    </form>


    @include('layouts.errors')


@endsection