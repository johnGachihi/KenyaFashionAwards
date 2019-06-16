<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    {{--<script src="{{ asset('js/app.js') }}"></script>--}}

    {{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>--}}
    {{--<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.0/jquery-ui.js"></script>--}}
    {{--<script src="https://cdnjs.cloudflare.com/ajax/libs/lodash.js/4.17.0/lodash.min.js"></script>--}}
    {{--<script src="https://cdnjs.cloudflare.com/ajax/libs/gridstack.js/0.4.0/gridstack.all.js"></script>--}}
    {{--<script src="https://cdnjs.com/libraries/Chart.js"></script>--}}
    
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app1.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootswatch.css') }}" rel="stylesheet">
    <link href="{{ asset('css/shards.css') }}" rel="stylesheet">

    {{--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/gridstack.js/0.4.0/gridstack.css"/>--}}
    @yield('stylesheets')

    <!-- Icons -->
    <link href="{{ asset('css/icon.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark bg-primary sticky-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/') }}/home">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="about">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/') }}/profiles">Profiles</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/') }}/articles">Articles</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/') }}/profiles">Profiles</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/') }}/articles">Articles</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/') }}">Awards</a>
                                <a class="nav-link" href="{{ url('/') }}">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/') }}">Contact Us</a>
                            </li>
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <!-- @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif -->
                        @else
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

        <main class="py-0">
            @yield('content')
        </main>
    </div>

    @yield('scripts')

    <script src="/vendor/unisharp/lavarel-ckeditor/ckeditor.js">
    </script>
    <script>
        CKEDITOR>replace('article-ckeditor');
    </script>
</body>
</html>
