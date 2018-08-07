@extends('layouts.app')

@section('title', 'Behandelaar')

@section('content')
    <h5> Verwijder een behandelaar</h5>

    <form method="POST"  action="/practitioners/{{ $practitioner->id }}">
        {{ csrf_field() }}
        {{ method_field('DELETE') }}

        Ben je zeker dat je dit behandelaar wil verwijderen?

        <div class="col s12">
            <button type="submit" class="btn btn-primary">Verwijderen</button>
        </div>
    </form>


    @include('layouts.errors')


@endsection