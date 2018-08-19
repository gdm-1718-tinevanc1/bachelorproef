@extends('layouts.app')

@section('title', 'Type behandelaar')

@section('content')
    <a class="btn right" href="{{ url('/types/practitioners/create') }}">
        <i class="fa fa-plus" aria-hidden="true"></i>
        Maak nieuwe behandelaars type aan
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
        @foreach ($type_practitioners as $type_practitioner)
            <tr>
                <td>
                    {{ $type_practitioner->name }}
                </td>

                 <td>
                    {{ str_limit($type_practitioner->description, $limit = 50, $end = '...') }}
                </td>

                <td>
                    <a href="/types/practitioners/{{$type_practitioner->id}}/edit">
                        <i class="fas fa-pencil-alt actionButtons" aria-hidden="true"></i>
                    </a>
                </td>

                <td>
                    <a href="/types/practitioners/{{$type_practitioner->id}}/delete">
                        <i class="fa fa-trash actionButtons" aria-hidden="true"></i>
                    </a>
                </td>

             </tr>
        @endforeach
        </tbody>
    </table>
    <ul class="pagination">
        {{$type_practitioners->links()}}
    </ul>
@endsection