<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'fan_stories_website') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" >
</head>
<body>

    <div id="app">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">

<div class="container">

<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
  
  <a class="navbar-brand" href="#"><i class="fa d-inline fa-lg fa-cloud"></i><b> FAN </b></a>
   
  <ul class="navbar-nav mr-auto"> <li class="nav-item active"><div class="p-2"><button class="btn btn-info" data-toggle="modal" data-target="#exampleModal" href="#">Inici</button></div></li>
  <li class="nav-item active"><div class="p-2"><button class="btn btn-info" data-toggle="modal" data-target="#exampleModal" href="#">General</button></div></li>
  <li class="nav-item active"><div class="p-2"><button class="btn btn-info" data-toggle="modal" data-target="#exampleModal" href="#">Noticies</button></div></li>
  <li class="nav-item active"><div class="p-2"><button class="btn btn-info" data-toggle="modal" data-target="#exampleModal" href="#">Videojocs</button></div></li>
  <li class="nav-item active"><div class="p-2"><button class="btn btn-info" data-toggle="modal" data-target="#exampleModal" href="#">Esports</button></div></li>
  <li class="nav-item active"><div class="p-2"><button class="btn btn-info" data-toggle="modal" data-target="#exampleModal" href="#">Comunitat</button></div></li></ul>

</div>
</div>
</nav>
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'fan_stories_website') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                    <hr>
                    @if (session()->has('flash'))
                    <div class="alert alert-info">{{session('flash')}}</div>
                    @endif
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item active">
                                <a class="nav-link" href="{{ url('/home') }}">Home</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

   </div>
        <!--   NAVBAR   STATUS  FOOTER  -->
        <main class="py-4"> <!--padding botton se empuja hacia abajo-->
            @yield('content')
        </main>
    
    
</body>
</html>
