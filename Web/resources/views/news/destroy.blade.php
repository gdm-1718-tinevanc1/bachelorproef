@extends('layouts.app')

@section('title', 'Nieuws')

@section('content')
    <h5> Verwijder een hulpmiddel</h5>

    <form method="POST"  action="/news/{{ $news->id }}">
        {{ csrf_field() }}
        {{ method_field('DELETE') }}

        Ben je zeker dat je dit nieuwsbericht wil verwijderen?

        <div class="col s12">
            <button type="submit" class="btn btn-primary">Verwijderen</button>
        </div>
    </form>


    @include('layouts.errors')


@endsection