@extends('layouts.app')

@section('title', 'voorbeeldoefeningen')

@section('content')
    <a class="btn right" href="{{ url('/exercisesexamples/create') }}">
        <i class="fa fa-plus" aria-hidden="true"></i>
        Maak nieuwe voorbeeldoefeningen aan
    </a>

    <h5> Voorbeeldoefeningen</h5>
    <hr>

    <table>
        <thead>
        <tr>
            <th>Naam</th>
            <th>Beschrijving</th>
            <th>Type</th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach ($exercisesexamples as $exercisesexample)
            <tr>
                <td>
                    {{ $exercisesexample->name }}
                </td>

                <td>
                    {{ $exercisesexample->description }}
                </td>

                 <td>
                    {{ $exercisesexample->typeExercisesexample->name }}
                </td>

                <td>
                    <a href="/exercisesexamples/{{$exercisesexample->id}}/edit">
                        <i class="fas fa-pencil-alt actionButtons" aria-hidden="true"></i>
                    </a>
                </td>

                <td>
                    <a href="/exercisesexamples/{{$exercisesexample->id}}/delete">
                        <i class="fa fa-trash actionButtons" aria-hidden="true"></i>
                    </a>
                </td>

                <td>
                     <a href="/exercisesexamples/{{$exercisesexample->id}}">
                     <i class="fa fa-caret-right actionButtons" aria-hidden="true"></i>
                     </a>
                 </td>

             </tr>
        @endforeach
        </tbody>
    </table>
    <ul class="pagination">
        {{$exercisesexamples->links()}}
    </ul>
@endsection