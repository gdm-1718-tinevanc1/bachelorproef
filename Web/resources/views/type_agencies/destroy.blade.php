@extends('layouts.app')

@section('title', 'Type instantie')

@section('content')
    <h5> Verwijder een type instantie</h5>

    <form method="POST"  action="/types/agencies/{{ $type_agency->id }}">
        {{ csrf_field() }}
        {{ method_field('DELETE') }}

        Ben je zeker dat je dit type instantie wil verwijderen?

        <div class="col s12 delete">
            <button type="submit" class="btn btn-primary">Verwijderen</button>
        </div>
    </form>


    @include('layouts.errors')


@endsection