<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
 <head> 

    <meta charset="utf-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="viewport" content="width=device-width, initial-scale=1">  
    <!-- CSRF Token --> 
    <meta name="csrf-token" content="{{ csrf_token() }}">  

    <!-- Styles --> 
    {!! MaterializeCSS::include_full() !!}
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>    


      <!-- Compiled and minified CSS -->
      <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css"> -->

    <!-- Compiled and minified JavaScript -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script> -->
        

            
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">  
    <!-- Scripts --> 
    <script>
        // rename myToken as you like
        window.Laravel =  {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
    <title>HSD/EDS - @yield('title')</title>

</head>
<body>
<nav>
    <div class="nav-wrapper">
        @if (Route::has('login'))
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    @if (Auth::check())
                        <li><a>Welkom {{ Auth::user()->username }}</a></li>
                        <li><a href="{{ url('/auth/logout')}}"> - <i class="fa fa-power-off" aria-hidden="true"></i></a></li>
                    @else
                        <li><a href="{{ url('/login') }}">Login</a></li>
                    @endif
                </ul>
            @endif
    </div>
</nav>
<!-- <div class="container"> -->
    <div class="row">
        <div class="col s2 sidebar">
            @include('layouts.sidebar')
        </div>
        <div class="col s10">
            <div class="container">
                @yield('content')
            </div
        </div>
    </div>
<!-- </div> -->

@if($flash = session('message'))
    <div class="chip alert" role="alert">
        {{ $flash }}
        <i class="close fa fa-times" aria-hidden="true"></i>

    </div>
@endif


</body>
<link rel="stylesheet" href="http://cdn.oesmith.co.uk/morris-0.4.3.min.css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>

<script src="{{ asset('js/app.js') }}"></script>

</html>



