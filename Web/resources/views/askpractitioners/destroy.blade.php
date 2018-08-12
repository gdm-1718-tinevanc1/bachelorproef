@extends('layouts.app')

@section('title', 'Vraag behandelaar')

@section('content')
    <h5> Verwijder een vraag behandelaar</h5>

    <form method="POST"  action="/askpractitioners/{{ $askpractitioner->id }}">
        {{ csrf_field() }}
        {{ method_field('DELETE') }}

        Ben je zeker dat je dit vraag behandelaar wil verwijderen?

        <div class="col s12">
            <button type="submit" class="btn btn-primary">Verwijderen</button>
        </div>
    </form>


    @include('layouts.errors')


@endsection