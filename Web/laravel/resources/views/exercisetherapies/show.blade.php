@extends('layouts.app')

@section('title', 'Oefeningstherapie')

@section('content')

    <p>{{ $exercisetherapy->text }}</p>
    <p> @if($exercisetherapy->right == 'good')
            Goede methode
         @else 
            Slechte methode
        @endif</p>

    <p>type: {{ $exercisetherapy->typeExercisetherapy->name }}</p>
   
    <div class="row">
        @foreach($exercisetherapy->images as $image)
            <div class="col s4"><img src="{{$image->url}}"></div>
        @endforeach
    </div>
@endsection
@include('layouts.editbar',['id' => $exercisetherapy->id])