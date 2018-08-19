@extends('layouts.app')

@section('title', 'Manuele therapie')

@section('content')
    <a class="btn right" href="{{ url('/manualtherapies/create') }}">
        <i class="fa fa-plus" aria-hidden="true"></i>
        Maak nieuwe manuele therapie aan
    </a>

    <h5> Manuele therapie</h5>
    <hr>

    <table>
        <thead>
        <tr>
            <th>Titel</th>
            <th>Tekst</th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach ($manualtherapies as $manualtherapy)
            <tr>
                <td>
                {{ str_limit($manualtherapy->title, $limit = 40, $end = '...') }}
                </td>


                <td>
                {!!html_entity_decode(str_limit($manualtherapy->text, $limit = 50, $end = '...'))!!}
                </td>

                <td>
                    <a href="/manualtherapies/{{$manualtherapy->id}}/edit">
                        <i class="fas fa-pencil-alt actionButtons" aria-hidden="true"></i>
                    </a>
                </td>

                <td>
                    <a href="/manualtherapies/{{$manualtherapy->id}}/delete">
                        <i class="fa fa-trash actionButtons" aria-hidden="true"></i>
                    </a>
                </td>

                <td>
                     <a href="/manualtherapies/{{$manualtherapy->id}}">
                     <i class="fa fa-caret-right actionButtons" aria-hidden="true"></i>
                     </a>
                 </td>

             </tr>
        @endforeach
        </tbody>
    </table>
    <ul class="pagination">
        {{$manualtherapies->links()}}
    </ul>
@endsection