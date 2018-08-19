@extends('layouts.app')

@section('title', 'Type voorbeeldoefeningen')

@section('content')
    <a class="btn right" href="{{ url('/types/exercisesexamples/create') }}">
        <i class="fa fa-plus" aria-hidden="true"></i>
        Maak nieuwe voorbeeldoefeningen type aan
    </a>

    <h5> Info</h5>
    <hr>

    <table>
        <thead>
        <tr>
            <th>Naam</th>
            <th>Beschrijving</th>
            <th></th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach ($type_exercisesexamples as $type_exercisesexample)
            <tr>
                <td>
                    {{ $type_exercisesexample->name }}
                </td>

                 <td>
                    {{ str_limit($type_exercisesexample->description, $limit = 50, $end = '...') }}
                </td>

                <td>
                    <a href="/types/exercisesexamples/{{$type_exercisesexample->id}}/edit">
                        <i class="fas fa-pencil-alt actionButtons" aria-hidden="true"></i>
                    </a>
                </td>

                <td>
                    <a href="/types/exercisesexamples/{{$type_exercisesexample->id}}/delete">
                        <i class="fa fa-trash actionButtons" aria-hidden="true"></i>
                    </a>
                </td>

             </tr>
        @endforeach
        </tbody>
    </table>
    <ul class="pagination">
        {{$type_exercisesexamples->links()}}
    </ul>
@endsection