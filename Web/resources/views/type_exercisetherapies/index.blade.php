@extends('layouts.app')

@section('title', 'Type oefeningtherapie')

@section('content')
    <a class="btn right" href="{{ url('/types/exercisetherapies/create') }}">
        <i class="fa fa-plus" aria-hidden="true"></i>
        Maak nieuwe oefeningtherapie type aan
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
        @foreach ($type_exercisetherapies as $type_exercisetherapy)
            <tr>
                <td>
                    {{ $type_exercisetherapy->name }}
                </td>

                 <td>
                 {{ str_limit($type_exercisetherapy->description, $limit = 50, $end = '...') }}
                </td>

                <td>
                    <a href="/types/exercisetherapies/{{$type_exercisetherapy->id}}/edit">
                        <i class="fas fa-pencil-alt actionButtons" aria-hidden="true"></i>
                    </a>
                </td>

                <td>
                    <a href="/types/exercisetherapies/{{$type_exercisetherapy->id}}/delete">
                        <i class="fa fa-trash actionButtons" aria-hidden="true"></i>
                    </a>
                </td>

             </tr>
        @endforeach
        </tbody>
    </table>
    <ul class="pagination">
        {{$type_exercisetherapies->links()}}
    </ul>
@endsection