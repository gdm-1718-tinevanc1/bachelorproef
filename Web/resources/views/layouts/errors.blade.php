@if (count($errors))
        <div class="col s12 red">
            <ul>
                @foreach ($errors ->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
@endif

