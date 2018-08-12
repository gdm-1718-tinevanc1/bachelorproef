@extends('layouts.app')

@section('title', 'Type behandelaar')

@section('content')
    <h5> Verwijder een type behandelaar</h5>

    <form method="POST"  action="/types/practitioners/{{ $type_practitioner->id }}">
        {{ csrf_field() }}
        {{ method_field('DELETE') }}

        Ben je zeker dat je dit type behandelaar wil verwijderen?

        <div class="col s12">
            <button type="submit" class="btn btn-primary">Verwijderen</button>
        </div>
    </form>


    @include('layouts.errors')


@endsection