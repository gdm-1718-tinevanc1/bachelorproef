@extends('layouts.app')

@section('title', 'Aanvragen behandelaars')


@section('content')
    <h6 class="bold">Aanvraag:</h6>
    <p style="margin-left:10px">  Regio: {{ $askpractitioner->regio }} <br>
         Type: {{ $askpractitioner->typePractitioner->name }} </p>
            
    <hr>
    <h6 class="bold">Beantwoorden:</h6>
     <form method="get" id="typepractitioner-form">
        <div class="input-field col s6">
            <label for="type_practitioner_id">Type</label><p class="padding5"></p>
            <select class="browser-default" class="form-control" id="type_practitioner_id" name="type_practitioner_id" onchange="document.getElementById('typepractitioner-form').submit()" required >
                <option value="" disabled selected>Kies het type</option>
                <option @if('all' == $selectedType) selected @endif value="all">Alle types</option>
                @foreach($type_practitioners as $type_practitioner)
                <option @if($type_practitioner->id == $selectedType) selected @endif value="{{$type_practitioner->id}}">{{$type_practitioner->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="input-field col s6">
            <label for="city">Regio</label><p class="padding5"></p>
            <select class="browser-default" class="form-control" id="city" name="city" onchange="document.getElementById('typepractitioner-form').submit()" required >
                <option value="" disabled selected>Kies de regio</option>
                <option @if('all' == $selectedRegio) selected @endif value="all">Alle regio's</option>
                @foreach($regions as $regio)
                <option @if($regio->city == $selectedRegio) selected @endif value="{{$regio->city}}">{{$regio->city}}</option>
                @endforeach
            </select>
        </div>
    </form>

    
    <form method="POST" action="/askpractitioners" enctype="multipart/form-data">
        {{ csrf_field() }}

        <div class="input-field col s12">
            <label for="practitioner_id">Behandelaren</label><p class="padding5"></p>
            <select style="height:300px" class="browser-default" class="form-control" id="practitioner_id" name="practitioner_id[]" required multiple >
                <option value="" disabled selected>Kies de behandelaars</option>
                @foreach($practitioners as $practitioner)
                    <option value="{{$practitioner->id}}">{{$practitioner->firstname}} {{$practitioner->lastname}} - {{$practitioner->location->city}}</option>
                @endforeach
            </select>
        </div>


        <input hidden name="id" value="{{ $askpractitioner->id }}">

        <div class="col s12">
            <button type="submit" class="btn btn-primary">Versturen</button>
        </div>
    </form>

@endsection
