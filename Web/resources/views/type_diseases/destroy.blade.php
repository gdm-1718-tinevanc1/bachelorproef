@extends('layouts.app')

@section('title', 'Type aandoening')

@section('content')
    <h5> Verwijder een type aandoening</h5>

    <form method="POST"  action="/type_diseases/{{ $typedisease->id }}">
        {{ csrf_field() }}
        {{ method_field('DELETE') }}

        Ben je zeker dat je dit type aandoening wil verwijderen?

        <div class="col s12 delete">
            <button type="submit" class="btn btn-primary">Verwijderen</button>
        </div>
    </form>


    @include('layouts.errors')


@endsection