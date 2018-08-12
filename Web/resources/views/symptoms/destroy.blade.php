@extends('layouts.app')

@section('title', 'Klacht')

@section('content')
    <h5> Verwijder een klacht</h5>

    <form method="POST"  action="/symptoms/{{ $symptom->id }}">
        {{ csrf_field() }}
        {{ method_field('DELETE') }}

        Ben je zeker dat je dit klacht wil verwijderen?

        <div class="col s12">
            <button type="submit" class="btn btn-primary">Verwijderen</button>
        </div>
    </form>


    @include('layouts.errors')


@endsection