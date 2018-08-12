@extends('layouts.app')

@section('title', 'Hulpmiddelen')

@section('content')

    <div class="news">
        <h5>{{$news->title}}</h5>
        <h6>{{$news->subtitle}}</h6>
        <p> {{$news->date}} -  {{$news->place}}</p>
        <div class="news__text">
            {{$news->text}}
        </div>
        <p>Bron: {{$news->source}}</p>
    </div> 
@endsection
@include('layouts.editbar',['id' => $news->id])