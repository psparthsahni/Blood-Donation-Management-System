<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Blood Donation Management System</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://use.fontawesome.com/1fe73434a9.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ route('dashboard') }}">
                Blood Donation Management System
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle Navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item ml-2">
                        <a class="btn btn-primary btn-block" href="{{ route('welcome') }}">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="py-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-header"></div>
                                <div class="card-body">
                                    <a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a>
                                    <hr>
                                    <a class="nav-link" href="{{ route('view-about') }}">About Us</a>
                                    <a class="nav-link" href="{{ route('view-blood-tips') }}">Blood Tips</a>
                                    <a class="nav-link" href="{{ route('view-upcoming-events') }}">Upcoming Events</a>
                                    <hr>
                                    <a class="nav-link" href="{{ route('view-blood-groups') }}">Blood Groups</a>
                                    <a class="nav-link" href="{{ route('view-donors') }}">Registered Donors</a>
                                    <a class="nav-link" href="{{ route('view-recipients') }}">Registered Recipients</a>
                                    <hr>
                                    <a class="nav-link" href="{{ route('welcome') }}">Logout</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="card">
                                <div class="card-header"></div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            @yield('content')
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
</body>
</html>
