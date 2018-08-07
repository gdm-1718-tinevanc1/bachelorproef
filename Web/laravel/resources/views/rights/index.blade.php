@extends('layouts.app')

@section('title', 'Rechten')

@section('content')
    <a class="btn right" href="{{ url('/rights/create') }}">
        <i class="fa fa-plus" aria-hidden="true"></i>
        Maak een nieuw recht aan
    </a>

    <h5> Rechten</h5>
    <hr>

    <table>
        <thead>
        <tr>
            <th>Titel</th>
            <th>Instantie</th>
            <th></th>
            <th></th>
            <th></th>

        </tr>
        </thead>
        <tbody>
        @foreach ($rights as $right)
            <tr>
                <td>
                    {{ $right->name }}
                </td>

                <td>
                 {{ $right->typeAgency->name }} 
                </td>



                <td>
                    <a href="/rights/{{$right->id}}/delete">
                        <i class="fa fa-trash actionButtons" aria-hidden="true"></i>
                    </a>
                </td>

                <td>
                    <a href="/rights/{{$right->id}}/edit">
                        <i class="fas fa-pencil-alt actionButtons" aria-hidden="true"></i>
                    </a>
                </td>

                 <td>
                     <a href="/rights/{{$right->id}}">
                     <i class="fa fa-caret-right actionButtons" aria-hidden="true"></i>
                     </a>
                 </td>
             </tr>
        @endforeach
        </tbody>
    </table>
    <ul class="pagination">
        {{$rights->links()}}
    </ul>
@endsection