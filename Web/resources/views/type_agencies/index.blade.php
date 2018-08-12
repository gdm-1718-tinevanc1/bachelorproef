@extends('layouts.app')

@section('title', 'Type instantie')


@section('content')
    <a class="btn right" href="{{ url('/types/agencies/create') }}">
        <i class="fa fa-plus" aria-hidden="true"></i>
        Maak nieuwe instanties type aan
    </a>

    <h5> Info</h5>
    <hr>

    <table>
        <thead>
        <tr>
            <th>Naam</th>
            <th>Land</th>
            <th></th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach ($type_agencies as $type_agency)
            <tr>
                <td>
                    {{ $type_agency->name }}
                </td>

                 <td>
                    {{ $type_agency->country->name }}
                </td>

                <td>
                    <a href="/types/agencies/{{$type_agency->id}}/edit">
                        <i class="fas fa-pencil-alt actionButtons" aria-hidden="true"></i>
                    </a>
                </td>

                <td>
                    <a href="/types/agencies/{{$type_agency->id}}/delete">
                        <i class="fa fa-trash actionButtons" aria-hidden="true"></i>
                    </a>
                </td>

             </tr>
        @endforeach
        </tbody>
    </table>
    <ul class="pagination">
        {{$type_agencies->links()}}
    </ul>
@endsection