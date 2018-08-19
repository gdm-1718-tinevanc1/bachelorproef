@extends('layouts.app')

@section('title', 'Contactformulier')

@section('content')
    <h5> Verwijder een contactformulier</h5>

    <form method="POST"  action="/contact/{{ $contact->id }}">
        {{ csrf_field() }}
        {{ method_field('DELETE') }}

        Ben je zeker dat je dit contactformulier wil verwijderen?

        <div class="col s12 delete">
            <button type="submit" class="btn btn-primary">Verwijderen</button>
        </div>
    </form>


    @include('layouts.errors')


@endsection