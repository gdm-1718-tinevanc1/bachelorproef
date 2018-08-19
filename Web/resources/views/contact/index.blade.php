@extends('layouts.app')

@section('title', 'Contactformulier')


@section('content')
    <h5>Aanvraag:</h5>
    <table>
        <thead>
        <tr>
            <th>Naam</th>
            <th>E-mailadres</th>
            <th>Bericht</th>
            <th>Beantwoord</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach ($contact as $form)
            <tr>
                <td>
                    {{ $form->name }}
                </td>
  
                <td>
                    {{ $form->email }}
                </td>

                <td>
                    {{ str_limit($form->message , $limit = 50, $end = '...') }}
                </td>

                <td>
                    @if($form->answered == 1)
                        Beantwoord
                    @else 
                        <span class="red-text">Niet beantwoord</span>
                    @endif
                </td>
                
                 <td>
                     <a href="/contact/{{$form->id}}">
                     <i class="fa fa-caret-right actionButtons" aria-hidden="true"></i>
                     </a>
                 </td>
             </tr>
        @endforeach
        </tbody>
    </table>

    <ul class="pagination">
        {{$contact->links()}}
    </ul>

@endsection
