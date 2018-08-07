@extends('layouts.app')

@section('title', 'Hulpmiddelen')


@section('content')
    <a class="btn right" href="{{ url('/devices/create') }}">
        <i class="fa fa-plus" aria-hidden="true"></i>
        Maak een nieuw hulpmiddel aan
    </a>

    <h5> Hulpmiddelen</h5>
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
        @foreach ($devices as $device)
            <tr>
                <td>
                    {{ $device->name }}
                </td>

                <td>
                    <a href="/devices/{{$device->id}}/edit">
                        <i class="fas fa-pencil-alt actionButtons" aria-hidden="true"></i>
                    </a>
                </td>

                <td>
                    <a href="/devices/{{$device->id}}/delete">
                        <i class="fa fa-trash actionButtons" aria-hidden="true"></i>
                    </a>
                </td>

                 <td>
                     <a href="/devices/{{$device->id}}">
                     <i class="fa fa-caret-right actionButtons" aria-hidden="true"></i>
                     </a>
                 </td>
             </tr>
        @endforeach
        </tbody>
    </table>
    <ul class="pagination">
        {{$devices->links()}}
    </ul>
@endsection