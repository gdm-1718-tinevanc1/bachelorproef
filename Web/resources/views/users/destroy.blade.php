@extends('layouts.app')

@section('title', 'Gebruikers')

@section('content')
    <h5> Verwijder een gebruiker</h5>

    <form method="POST"  action="/users/{{ $user->id }}">
        {{ csrf_field() }}
        {{ method_field('DELETE') }}

        Ben je zeker dat je dit gebruiker wil verwijderen?

        <div class="col s12 delete">
            <button type="submit" class="btn btn-primary">Verwijderen</button>
        </div>
    </form>


    @include('layouts.errors')


@endsection