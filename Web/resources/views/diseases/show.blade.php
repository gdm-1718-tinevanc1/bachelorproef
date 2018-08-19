@extends('layouts.app')

@section('title', 'Aandoeningen')

@section('content')

    <h1>Wat is {{ $disease->title }}?</h1>


    <ul class="collapsible popout" data-collapsible="accordion">
        <li>
          <div class="collapsible-header active">Info</div>
          <div class="collapsible-body"><span> {!!html_entity_decode($disease->description)!!}
            <h6>Kenmerken:</h6>
            <ul class="list--square">
            @foreach($disease->characDiseases as $charac)
                    <li>{{$charac->description}}</li>
            @endforeach
                </ul>
              
          </span></div>
        </li>

    @foreach($disease->typesDiseases as $typeDiseases)
     <li>
        <div class="collapsible-header">
            {{$typeDiseases->name}} 
            <span class="editLinks"> 
            <a href="/type_diseases/{{$typeDiseases->id}}/edit">
                <i class="fas fa-pencil-alt actionButtons" aria-hidden="true"></i>
            </a>
            <a href="/type_diseases/{{$typeDiseases->id}}/delete">
                <i class="fa fa-trash actionButtons" aria-hidden="true"></i>
            </a> </span>
        </div>
        <div class="collapsible-body"><span>
        <ul class="collapsible" data-collapsible="accordion">
            @if($typeDiseases->info)
            <li>
                <div class="collapsible-header">Info</div>
                <div class="collapsible-body"><span>{!!html_entity_decode($typeDiseases->info)!!}</span></div>
            </li>
            @endif
            @if($typeDiseases->criteria)
            <li>
                <div class="collapsible-header">Criteria</div>
                <div class="collapsible-body"><span>{!!html_entity_decode($typeDiseases->criteria)!!}</span></div>
            </li>
            @endif
            @if($typeDiseases->diagnose)
            <li>
                <div class="collapsible-header">Diagnose</div>
                <div class="collapsible-body"><span>{!!html_entity_decode($typeDiseases->diagnose)!!}</span></div>
            </li>
            @endif
        </ul>
            @foreach($typeDiseases->images as $image)
                <img style="width:200px" src="{{$image->url}}">
            @endforeach
        </span>
        </div>
    </li>

    @endforeach

    <div style="margin-top:20px"><a class="btn right"  href="/type_diseases/{{$disease->id}}/create">
        <i class="fa fa-plus" aria-hidden="true"></i>
        Maak een nieuwe type aan
    </a></div>
   



@endsection
@include('layouts.editbar',['id' => $disease->id])