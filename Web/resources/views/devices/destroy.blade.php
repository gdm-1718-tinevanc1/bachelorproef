@extends('layouts.app')

@section('title', 'Hulpmiddel')

@section('content')
    <h5> Verwijder een hulpmiddel</h5>

    <form method="POST"  action="/devices/{{ $device->id }}">
        {{ csrf_field() }}
        {{ method_field('DELETE') }}

        Ben je zeker dat je dit hulpmiddel wil verwijderen?

        <div class="col s12 delete">
            <button type="submit" class="btn btn-primary">Verwijderen</button>
        </div>
    </form>


    @include('layouts.errors')


@endsection