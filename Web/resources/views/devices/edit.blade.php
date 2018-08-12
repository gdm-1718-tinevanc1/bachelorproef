@extends('layouts.app')

@section('title', 'Hulpmiddelen')

@section('sidebar')
    @parent

@endsection

@section('content')
    <h5> Pas een hulpmiddel aan</h5>

    <form method="POST" action="/devices/{{ $device->id }}" enctype="multipart/form-data">
        {{ csrf_field() }}
        {{ method_field('PATCH') }}

        <div class="input-field col s12">
            <label for="name">Naam</label>
            <input type="text" class="form-control" id="name" name="name" value="{{$device->name}}" required >
        </div>

        <div class="input-field col s12">
          <textarea id="intention" name="intention" class="materialize-textarea" required>{{$device->intention}}</textarea>
          <label for="intention">Doel</label>
        </div>


        <div class="input-field col s12">
          <textarea id="procedure" name="procedure" class="materialize-textarea" required>{{$device->procedure}}</textarea>
          <label for="procedure">Procedure</label>
        </div>


         <div class="input-field col s12">
            <label for="type_agency_id">Instantie</label><p class="padding5"></p>
            <select class="browser-default" class="form-control" id="type_agency_id" name="type_agency_id" required >
                <option value="" disabled selected>Kies de instantie</option>
                @foreach($type_agencies as $type_agency)
                    <option @if($type_agency->id == $device->type_agency_id) selected @endif value="{{$type_agency->id}}">{{$type_agency->name}}</option>
                @endforeach
            </select>
        </div>

         <div class="input-field col s12">
            <label for="type_device">Types</label><p class="padding5"></p>
            <select class="browser-default" class="form-control" id="type_device" name="type_device" multiple required >
                <option value="" disabled selected>Kies de type</option>
                @foreach($type_devices as $type_device)
                    <option @if($type_device->id == $device->type_device_id) selected @endif value="{{$type_device->id}}">{{$type_device->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="row">
            @foreach($device->images as $image)
                <div class="col s4"><img src="{{$image->url}}">
                    <div class="btn--delete"><a href="/devices/deleteImage/{{$image->id}}"><i class="fa fa-trash-alt"></i></a></div>            
                </div>
            @endforeach
        </div>

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