@extends('layouts.app')

@section('title', 'Type oefeningtherapie')

@section('content')
    <h5> Verwijder een type oefeningtherapie</h5>

    <form method="POST"  action="/types/exercisetherapies/{{ $type_exercisetherapy->id }}">
        {{ csrf_field() }}
        {{ method_field('DELETE') }}

        Ben je zeker dat je dit type oefeningtherapie wil verwijderen?

        <div class="col s12 delete">
            <button type="submit" class="btn btn-primary">Verwijderen</button>
        </div>
    </form>


    @include('layouts.errors')


@endsection