@extends('layouts.app')

@section('title', 'Recht')

@section('content')
    <h5> Verwijder een recht</h5>

    <form method="POST"  action="/rights/{{ $right->id }}">
        {{ csrf_field() }}
        {{ method_field('DELETE') }}

        Ben je zeker dat je dit recht wil verwijderen?

        <div class="col s12  delete">
            <button type="submit" class="btn btn-primary">Verwijderen</button>
        </div>
    </form>


    @include('layouts.errors')


@endsection