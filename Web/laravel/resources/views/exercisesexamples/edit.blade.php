@extends('layouts.app')

@section('title', 'Voorbeeldoefeningen')

@section('sidebar')
    @parent

@endsection

@section('content')
    <h5> Pas een voorbeeldoefeningen aan</h5>

    <form method="POST" action="/exercisesexamples/{{ $exercisesexample->id }}" enctype="multipart/form-data">
        {{ csrf_field() }}
        {{ method_field('PATCH') }}

        <div class="input-field col s12">
            <label for="name">Naam</label>
            <input type="text" class="form-control" id="name" name="name" value="{{$exercisesexample->name}}" required >
        </div>

        <div class="input-field col s12">
            <label for="description">Beschrijving</label>
            <input type="text" class="form-control" id="description" name="description" value="{{$exercisesexample->description}}" required >
        </div>

        <div class="input-field col s12">
            <label for="type_exercisesexample_id">Type</label><p class="padding5"></p>
            <select class="browser-default" class="form-control" id="type_exercisesexample_id" name="type_exercisesexample_id" value="{{$exercisesexample->type_exercisesexample_id}}" required >
                <option value="" disabled selected>Kies het type</option>
                @foreach($type_exercisesexamples as $type_exercisesexample)
                    <option @if($type_exercisesexample->id == $exercisesexample->type_exercisesexample_id) selected @endif value="{{$type_exercisesexample->id}}">{{$type_exercisesexample->name}}</option>
                @endforeach
            </select>
        </div>




        <!-- <div class="row">
            @foreach($exercisesexample->images as $image)
                <div class="col s4"><img src="{{$image->url}}"></div>
            @endforeach
        </div> -->
        <div class="file-field input-field col s6">
            <div class="btn">
                <span><i class="fas fa-images"></i></span>
                <input id="image" name="image[]" type="file" value="{{ old('image') }}"  multiple required>
            </div>
            <div class="file-path-wrapper">
                <input class="file-path validate" type="text" required>
            </div>
        </div>
        


        <div class="col s12">
            <button type="submit" class="btn btn-primary">Aanpassen</button>
        </div>
    </form>




    @include('layouts.errors')


@endsection
