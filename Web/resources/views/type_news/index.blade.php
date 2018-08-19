@extends('layouts.app')

@section('title', 'Type nieuws')


@section('content')
    <a class="btn right" href="{{ url('/types/news/create') }}">
        <i class="fa fa-plus" aria-hidden="true"></i>
        Maak nieuwe nieuws type aan
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
        @foreach ($type_news as $type_new)
            <tr>
                <td>
                    {{ $type_new->name }}
                </td>

                 <td>
                    {{ str_limit($type_new->description, $limit = 50, $end = '...') }}
                </td>

                <td>
                    <a href="/types/news/{{$type_new->id}}/edit">
                        <i class="fas fa-pencil-alt actionButtons" aria-hidden="true"></i>
                    </a>
                </td>

                <td>
                    <a href="/types/news/{{$type_new->id}}/delete">
                        <i class="fa fa-trash actionButtons" aria-hidden="true"></i>
                    </a>
                </td>

             </tr>
        @endforeach
        </tbody>
    </table>
    <ul class="pagination">
        {{$type_news->links()}}
    </ul>
@endsection