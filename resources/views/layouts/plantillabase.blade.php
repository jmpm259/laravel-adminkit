<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title',config('app.name'))</title>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- VITE CSS -->
    @vite(['resources/sass/app.scss'])
    <!-- CSS -->
    @yield('css')
</head>
<body>
    <div class="wrapper">
        @include('layouts.app.nav')
        <div class="main">
            @include('layouts.app.usernav')
            @include('layouts.app.content')
            @include('layouts.app.footer')
        </div>
	</div>
    <!-- VITE Scripts -->
    @vite(['resources/js/app.js'])
    <!-- Blade Scripts Load -->
    @stack('scripts')
</body>
</html>