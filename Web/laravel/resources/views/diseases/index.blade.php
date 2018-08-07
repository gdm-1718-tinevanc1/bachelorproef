@extends('layouts.app')

@section('title', 'Aandoeningen')


@section('content')
    <a class="btn right" href="{{ url('/diseases/create') }}">
        <i class="fa fa-plus" aria-hidden="true"></i>
        Maak nieuwe info aan
    </a>

    <h5> Info</h5>
    <hr>

    <table>
        <thead>
        <tr>
            <th>Titel</th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach ($diseases as $disease)
            <tr>
                <td>
                    {{ $disease->title }}
                </td>

                <td>
                    <a href="/diseases/{{$disease->id}}/edit">
                        <i class="fas fa-pencil-alt actionButtons" aria-hidden="true"></i>
                    </a>
                </td>

                <td>
                    <a href="/diseases/{{$disease->id}}/delete">
                        <i class="fa fa-trash actionButtons" aria-hidden="true"></i>
                    </a>
                </td>


                 <td>
                     <a href="/diseases/{{$disease->id}}">
                        <i class="fa fa-caret-right actionButtons" aria-hidden="true"></i>
                     </a>
                 </td>
             </tr>
        @endforeach
        </tbody>
    </table>

    <ul class="pagination">
        {{$diseases->links()}}
    </ul>
@endsection