<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- VITE CSS -->
    @vite(['resources/sass/login.scss'])
</head>
<body class="hold-transition @yield('bodystyle')">
    <div class="@yield('boxstyle')">
        @yield('content')
    </div>
    <!-- /.login-box -->    
    <!-- VITE Scripts -->
    @vite(['resources/js/login.js'])
</body>
</html>
