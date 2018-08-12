@extends('layouts.app')

@section('title', 'Hulpmiddelen')

@section('sidebar')
    @parent

@endsection

@section('content')
    <h5> Pas een hulpmiddel aan</h5>

    <form method="POST" action="/news/{{ $news->id }}" enctype="multipart/form-data">
        {{ csrf_field() }}
        {{ method_field('PATCH') }}

        <div class="input-field col s12">
            <label for="title">Titel</label>
            <input type="text" class="form-control" id="title" name="title" value="{{$news->title}}" required >
        </div>

        <div class="input-field col s12">
            <label for="subtitle">Subtitel</label>
            <input type="text" class="form-control" id="subtitle" name="subtitle" value="{{$news->subtitle}}" required >
        </div>


        <div class="input-field col s12">
            <label for="text">Tekst</label>
            <textarea type="text" class="form-control" id="text" name="text">{{$news->text}} </textarea>
        </div>

        <div class="input-field col s12">
            <label for="date">Datum</label>
            <input type="date" class="form-control" id="date" name="date" value="{{$news->date}}" required >
        </div>

        <div class="input-field col s12">
            <label for="place">Plaats</label>
            <input type="text" class="form-control" id="place" name="place" value="{{$news->place}}" required >
        </div>

        <div class="input-field col s12">
            <label for="source">Bron</label>
            <input type="text" class="form-control" id="source" name="source" value="{{$news->source}}" required >
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
            <button type="submit" class="btn btn-primary">Aanpassen</button>
        </div>
    </form>


    @include('layouts.errors')


@endsection