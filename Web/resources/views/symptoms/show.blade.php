@extends('layouts.app')

@section('title', 'Klachten')

@section('content')

    <h1>{{ $symptom->title }}</h1>
   
    <h5>Info:</h5>
    {!!html_entity_decode( $symptom->info)!!}

    <h5>Bronnen:</h5>
    @foreach($symptom->sources as $source)
        {{$source->link}}
    @endforeach

    <div class="row">
        @foreach($symptom->images as $image)
            <div class="col s4"><img src="{{$image->url}}"></div>
        @endforeach
    </div>


@endsection
@include('layouts.editbar',['id' => $symptom->id])