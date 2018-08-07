@extends('layouts.app')

@section('title', 'Aanvragen behandelaars')


@section('content')
    <h5>Aanvraag:</h5>
    <table>
        <thead>
        <tr>
            <th>Regio</th>
            <th>Type</th>
            <th>E-mailadres</th>
            <th>Beantwoord</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach ($askpractitioners as $askpractitioner)
            <tr>
                <td>
                    {{ $askpractitioner->regio }}
                </td>
  
                <td>
                    {{ $askpractitioner->typePractitioner->name }}
                </td>

                <td>
                    {{ $askpractitioner->email }}
                </td>

                <td>
                    @if($askpractitioner->answered == 1)
                        Beantwoord
                    @else 
                        <span class="red-text">Niet beantwoord</span>
                    @endif
                </td>
                
                 <td>
                     <a href="/askpractitioners/{{$askpractitioner->id}}">
                     <i class="fa fa-caret-right actionButtons" aria-hidden="true"></i>
                     </a>
                 </td>
             </tr>
        @endforeach
        </tbody>
    </table>

    <ul class="pagination">
        {{$askpractitioners->links()}}
    </ul>

@endsection
