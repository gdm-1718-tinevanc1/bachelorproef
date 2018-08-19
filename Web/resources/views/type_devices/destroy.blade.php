@extends('layouts.app')

@section('title', 'Type hulpmiddel')

@section('content')
    <h5> Verwijder een type hulpmiddel</h5>

    <form method="POST"  action="/types/devices/{{ $type_device->id }}">
        {{ csrf_field() }}
        {{ method_field('DELETE') }}

        Ben je zeker dat je dit type hulpmiddel wil verwijderen?

        <div class="col s12 delete">
            <button type="submit" class="btn btn-primary">Verwijderen</button>
        </div>
    </form>


    @include('layouts.errors')


@endsection