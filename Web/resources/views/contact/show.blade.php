@extends('layouts.app')

@section('title', 'Contactformulier')


@section('content')

    {{ $contact->name }}
    {{ $contact->email }}
    {{ $contact->message }}

    <h6 class="bold">Beantwoorden:</h6>
    

    <form method="POST" action="/contact" enctype="multipart/form-data">
        {{ csrf_field() }}

      <div class="input-field col s12">
          <textarea id="message" name="message" class="materialize-textarea" required>{{old('message')}}</textarea>
          <label for="message">Bericht</label>
        </div>

        <input hidden name="id" value="{{ $contact->id }}">

        <div class="col s12">
            <button type="submit" class="btn btn-primary">Mail versturen</button>
        </div>
    </form>

@endsection
