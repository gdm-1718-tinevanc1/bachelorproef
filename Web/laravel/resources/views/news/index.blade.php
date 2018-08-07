@extends('layouts.app')

@section('title', 'Nieuws')


@section('content')
    <a class="btn right" href="{{ url('/news/create') }}">
        <i class="fa fa-plus" aria-hidden="true"></i>
        Maak een nieuw nieuwsbericht aan
    </a>

    <h5> Nieuws</h5>
    <hr>

    <table>
        <thead>
        <tr>
            <th>Titel</th>
            <th>Datum</th>
            <th></th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach ($news as $new)
            <tr>
                <td>
                    {{ $new->title }}
                </td>

                <td>
                    {{ $new->date }}
                </td>


                <td>
                    <a href="/news/{{$new->id}}/edit">
                        <i class="fas fa-pencil-alt actionButtons" aria-hidden="true"></i>
                    </a>
                </td>

                <td>
                    <a href="/news/{{$new->id}}/delete">
                        <i class="fa fa-trash actionButtons" aria-hidden="true"></i>
                    </a>
                </td>

                 <td>
                     <a href="/news/{{$new->id}}">
                     <i class="fa fa-caret-right actionButtons" aria-hidden="true"></i>
                     </a>
                 </td>
             </tr>
        @endforeach
        </tbody>
    </table>
    <ul class="pagination">
        {{$news->links()}}
    </ul>
@endsection