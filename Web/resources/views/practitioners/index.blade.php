@extends('layouts.app')

@section('title', 'Behandelaars')


@section('content')
    <a class="btn right" href="{{ url('/practitioners/create') }}">
        <i class="fa fa-plus" aria-hidden="true"></i>
        Maak een nieuwe behandelaar aan
    </a>

    <h5> Behandelaars</h5>
    <hr>

    <table>
        <thead>
        <tr>
            <th class="link"><a href="?sort=lastname"> Naam </a></th>
            <th class="link"><a href="?sort=type_practitioner"> Functie </a></th>
            <th class="link"><a href="?sort=country"> Land </a></th>
            <th class="link"><a href="?sort=city"> Stad </a></th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach ($practitioners as $practitioner)
            <tr>
                <td>
                {{ $practitioner->lastname }}{{ $practitioner->firstname }}
                </td>
  
                <td>
                    {{ $practitioner->typePractitioner->name }}
                </td>

                <td>
                    {{ $practitioner->location->country->name }}
                </td>

                <td>
                    {{ $practitioner->location->city }}
                </td>
                
                <td>
                    <a href="/practitioners/{{$practitioner->id}}/delete">
                        <i class="fa fa-trash actionButtons" aria-hidden="true"></i>
                    </a>
                </td>

                <td>
                    <a href="/practitioners/{{$practitioner->id}}/edit">
                        <i class="fas fa-pencil-alt actionButtons" aria-hidden="true"></i>
                    </a>
                </td>

                 <td>
                     <a href="/practitioners/{{$practitioner->id}}">
                     <i class="fa fa-caret-right actionButtons" aria-hidden="true"></i>
                     </a>
                 </td>
             </tr>
        @endforeach
        </tbody>
    </table>
    <ul class="pagination">
        {{$practitioners->links()}}
    </ul>
@endsection