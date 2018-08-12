@extends('layouts.app')

@section('title', 'Type nieuws')

@section('content')
    <h5> Verwijder een type nieuws</h5>

    <form method="POST"  action="/types/news/{{ $type_new->id }}">
        {{ csrf_field() }}
        {{ method_field('DELETE') }}

        Ben je zeker dat je dit type nieuws wil verwijderen?

        <div class="col s12">
            <button type="submit" class="btn btn-primary">Verwijderen</button>
        </div>
    </form>


    @include('layouts.errors')


@endsection