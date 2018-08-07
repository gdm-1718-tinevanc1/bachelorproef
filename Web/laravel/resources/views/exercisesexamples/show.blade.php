@extends('layouts.app')

@section('title', 'Voorbeeldoefeningen')

@section('content')

    <h1>{{ $exercisesexample->name }}</h1>
    <p>{{ $exercisesexample->description }}</p>
    <p>type: {{ $exercisesexample->typeExercisesexample->name }}</p>
   
    
    <div class="row">
        @foreach($exercisesexample->images as $image)
            <div class="col s4"><img src="{{$image->url}}"></div>
        @endforeach
    </div>
@endsection
@include('layouts.editbar',['id' => $exercisesexample->id])