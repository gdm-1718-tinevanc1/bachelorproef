@extends('layouts.app')

@section('title', 'Dashboard')


@section('content')
<div class="dashboard">
@if(!$askpractitioners->isEmpty())
    <div class="list">
        <h6 class="bold" >Aanvragen behandelaars</h6>
        <table>
                <thead>
                <tr>
                    <th>Regio</th>
                    <th>Type</th>
                    <th>E-mailadres</th>
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
                            <a href="/askpractitioners/{{$askpractitioner->id}}">
                            <i class="fa fa-caret-right actionButtons" aria-hidden="true"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
    </div>
    @endif

    @if(!$contact->isEmpty())
    <div class="list">
        <h6 class="bold" >Contactformulieren</h6>
        <table>
            <thead>
            <tr>
                <th>Naam</th>
                <th>E-mailadres</th>
                <th>Bericht</th>
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
                        {{ $form->message }}
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
    </div>
    @endif

    <div class="row blocks">
            <div class="col s4">
                <div class="block">
                    <a href="{{ url('/users') }}">
                        <p class="count"> {{$users_count}}</p>
                            <p>Gebruikers</p>
                    </a>
                </div>
            </div>
            <div class="col s4">
                <div class="block">
                    <a href="{{ url('/practitioners') }}">
                        <p class="count"> {{$practitioners_count}}</p>
                        <p>Behandelaars (lijst)</p>
                    </a>
                </div>
            </div>
            <div class="col s4">
                <div class="block">
                    <a href="{{ url('/users') }}">
                        <p class="count"> {{$medicalprofiles_count}}</p>
                        <p>Medische profielen</p>
                    </a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col s5">
                <p class="bold">Nieuwe gebruikers per maand:</p>
                <div id="usersByMonths" style="height: 250px;"></div>
            </div>
            <div class="col s7">
                <p class="bold">Gebruikers per rol:</p>
                <div id="usersByRoles" style="height: 250px;"></div>
            </div>
        </div>

</div>

@endsection


<script>
    var usersByMonths = {!! json_encode($userByMonths->toArray(), JSON_HEX_TAG) !!}
    var usersByRoles = {!! json_encode($userByRoles->toArray(), JSON_HEX_TAG) !!}
</script>
