@extends('layouts.app')

@section('title', 'Oefeningstherapie')

@section('content')
    <a class="btn right" href="{{ url('/exercisetherapies/create') }}">
        <i class="fa fa-plus" aria-hidden="true"></i>
        Maak nieuwe oefeningstherapie aan
    </a>

    <h5> Oefeningstherapie</h5>
    <hr>

    <table>
        <thead>
        <tr>
            <th>Tekst</th>
            <th>Correct</th>
            <th>Type</th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach ($exercisetherapies as $exercisetherapy)
            <tr>
                <td>
                {{ str_limit($exercisetherapy->text, $limit = 50, $end = '...') }}
                </td>

                <td>
                    @if($exercisetherapy->right == 'good')
                       <span class="green-text">Goed</span>
                    @else
                        <span class="red-text">Slecht</span>
                    @endif
                </td>

                 <td>
                    {{ $exercisetherapy->typeExercisetherapy->name }}
                </td>

                <td>
                    <a href="/exercisetherapies/{{$exercisetherapy->id}}/edit">
                        <i class="fas fa-pencil-alt actionButtons" aria-hidden="true"></i>
                    </a>
                </td>

                <td>
                    <a href="/exercisetherapies/{{$exercisetherapy->id}}/delete">
                        <i class="fa fa-trash actionButtons" aria-hidden="true"></i>
                    </a>
                </td>

                <td>
                     <a href="/exercisetherapies/{{$exercisetherapy->id}}">
                     <i class="fa fa-caret-right actionButtons" aria-hidden="true"></i>
                     </a>
                 </td>

             </tr>
        @endforeach
        </tbody>
    </table>
    <ul class="pagination">
        {{$exercisetherapies->links()}}
    </ul>
@endsection