@extends('layouts.app')

@section('title', 'Nieuws')

@section('sidebar')
    @parent

@endsection

@section('content')
    <h5> Maak een nieuws aan</h5>

    <form method="POST" action="/news" enctype="multipart/form-data">
        {{ csrf_field() }}


        <div class="input-field col s12">
            <label for="title">Titel</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}" required >
        </div>

        <div class="input-field col s12">
            <label for="subtitle">Subtitel</label>
            <input type="text" class="form-control" id="subtitle" name="subtitle" value="{{ old('subtitle') }}" required >
        </div>

        <div class="input-field col s12">
          <textarea id="text" name="text" class="materialize-textarea" required>{{ old('text') }}</textarea>
          <label for="text">Tekst</label>
        </div>


        <div class="input-field col s12">
            <label for="date">Datum</label>
            <input type="date" class="form-control" id="date" name="date" value="{{ old('date') }}" required >
        </div>

        <div class="input-field col s12">
            <label for="place">Plaats</label>
            <input type="text" class="form-control" id="place" name="place" value="{{ old('place') }}" required >
        </div>

        <div class="input-field col s12">
            <label for="source">Bron</label>
            <input type="text" class="form-control" id="source" name="source" value="{{ old('source') }}" required >
        </div>


       
         <div class="input-field col s12">
            <label for="type_news_id">Types</label><p class="padding5"></p>
            <select class="browser-default" class="form-control" id="type_news_id" name="type_news_id[]" multiple required >
                <option value="" disabled selected>Kies het type</option>
                @foreach($type_news as $type_new)
                    <option value="{{$type_new->id}}">{{$type_new->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="col s12">
            <button type="submit" class="btn btn-primary">Toevoegen</button>
        </div>
    </form>




    @include('layouts.errors')


@endsection
