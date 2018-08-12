@extends('layouts.app')

@section('title', 'Aandoening')

@section('content')
    <h5> Verwijder een aandoening</h5>

    <form method="POST"  action="/diseases/{{ $disease->id }}">
        {{ csrf_field() }}
        {{ method_field('DELETE') }}

        Ben je zeker dat je dit aandoening wil verwijderen?

        <div class="col s12">
            <button type="submit" class="btn btn-primary">Verwijderen</button>
        </div>
    </form>


    @include('layouts.errors')


@endsection