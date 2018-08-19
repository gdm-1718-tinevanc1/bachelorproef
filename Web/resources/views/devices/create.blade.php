@extends('layouts.app')

@section('title', 'Hulpmiddelen')

@section('sidebar')
    @parent

@endsection

@section('content')
    <h5> Maak een hulpmiddel aan</h5>

    <form method="POST" action="/devices" enctype="multipart/form-data">
        {{ csrf_field() }}


        <div class="input-field col s12">
            <label for="name">Naam</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required >
        </div>

        <div class="input-field col s12">
          <textarea id="intention" name="intention" class="materialize-textarea" required>{{ old('intention') }}</textarea>
          <label for="intention">Doel</label>
        </div>


        <div class="input-field col s12">
          <textarea id="procedure" name="procedure" class="materialize-textarea" required>{{ old('procedure') }}</textarea>
          <label for="procedure">Procedure</label>
        </div>


         <div class="input-field col s12">
            <label for="type_agency_id">Instantie</label><p class="padding5"></p>
            <select class="browser-default" class="form-control" id="type_agency_id" name="type_agency_id" required >
                <option value="" disabled selected>Kies de instantie</option>
                @foreach($type_agencies as $type_agency)
                    <option value="{{$type_agency->id}}">{{$type_agency->name}}</option>
                @endforeach
            </select>
        </div>

         <div class="input-field col s12">
            <label for="type_device_id">Types</label><p class="padding5"></p>
            <select class="browser-default" class="form-control" id="type_device_id" name="type_device_id[]" multiple required >
                <option value="" disabled selected>Kies het type</option>
                @foreach($type_devices as $type_device)
                    <option value="{{$type_device->id}}">{{$type_device->name}}</option>
                @endforeach
            </select>
        </div>


        <div class="file-field input-field col s6">
            <div class="btn">
                <span><i class="fas fa-images"></i></span>
                <input id="image" name="image[]" type="file" value="{{ old('image') }}"  multiple>
            </div>
            <div class="file-path-wrapper">
                <input class="file-path validate" type="text">
            </div>
        </div>

    
        <div class="col s12">
            <button type="submit" class="btn btn-primary">Toevoegen</button>
        </div>
    </form>




    @include('layouts.errors')


@endsection
