@extends('layouts.app')

@section('title', 'Type hulpmiddel')


@section('content')
    <a class="btn right" href="{{ url('/types/devices/create') }}">
        <i class="fa fa-plus" aria-hidden="true"></i>
        Maak nieuwe hulpmiddel type aan
    </a>

    <h5> Info</h5>
    <hr>

    <table>
        <thead>
        <tr>
            <th>Naam</th>
            <th></th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach ($type_devices as $type_device)
            <tr>
                <td>
                    {{ $type_device->name }}
                </td>

                <td>
                    <a href="/types/devices/{{$type_device->id}}/edit">
                        <i class="fas fa-pencil-alt actionButtons" aria-hidden="true"></i>
                    </a>
                </td>

                <td>
                    <a href="/types/devices/{{$type_device->id}}/delete">
                        <i class="fa fa-trash actionButtons" aria-hidden="true"></i>
                    </a>
                </td>

             </tr>
        @endforeach
        </tbody>
    </table>
    <ul class="pagination">
        {{$type_devices->links()}}
    </ul>
@endsection