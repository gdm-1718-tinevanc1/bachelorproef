@extends('layouts.app')

@section('title', 'Klachten')


@section('content')
    <a class="btn right" href="{{ url('/symptoms/create') }}">
        <i class="fa fa-plus" aria-hidden="true"></i>
        Maak een nieuwe klacht aan
    </a>

    <h5> Klachtenprofiel</h5>
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
        @foreach ($symptoms as $symptom)
            <tr>
                <td>
                    {{ $symptom->title }}
                </td>

                <td>
                    <a href="/symptoms/{{$symptom->id}}/delete">
                        <i class="fa fa-trash actionButtons" aria-hidden="true"></i>
                    </a>
                </td>

                <td>
                    <a href="/symptoms/{{$symptom->id}}/edit">
                        <i class="fas fa-pencil-alt actionButtons" aria-hidden="true"></i>
                    </a>
                </td>

                 <td>
                     <a href="/symptoms/{{$symptom->id}}">
                     <i class="fa fa-caret-right actionButtons" aria-hidden="true"></i>
                     </a>
                 </td>
             </tr>
        @endforeach
        </tbody>
    </table>

    <ul class="pagination">
        {{$symptoms->links()}}
    </ul>
@endsection