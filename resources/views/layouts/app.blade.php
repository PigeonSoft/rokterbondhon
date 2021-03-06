<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('public/js/app.js') }}"></script>
    <script src="{{ asset('public/js/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('public/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('public/js/lightbox.js') }}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('public/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('public/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('public/css/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/css/owl.theme.default.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/css/normalize.css') }}" rel="stylesheet">
    <link href="{{ asset('public/css/responsive.css') }}" rel="stylesheet">
    <link href="{{ asset('public/css/lightbox.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('public/images/rokterbondhon_white.png') }}" alt="" class="rokto-logo">
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
                            <a class="nav-link" href="{{ url('/') }}">হোম</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://blog.rokterbondhon.com/">ব্লগ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('photo-gallery') }}">ফটো গ্যালারি</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('organizations') }}">সংগঠন</a>
                        </li>
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">লগইন</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">রেজিস্ট্রেশন</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('profile') }}">প্রোফাইল</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        লগআউট
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

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <div class="main-footer">
        <!-- Start Notice Area -->
    

        <!-- Start Footer ARea -->
        <footer class="footer-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-md-6 col-sm-6 col-12">
                        <div class="footer-left">
                            <p>© {{date('Y')}} রক্তেরবন্ধন || all Right reserved </p>
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-6 col-sm-6 col-12">
                        <div class="footer-right">
                            <p> Follow us on <a target="_blank" href="#"><i class="fa fa-facebook-square"></i></a></p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Rnd Footer ARea -->
    </div>
</body>
</html>
