<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="{{ asset('frontend/css/all.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/css/custom.css') }}">

        <!-- Styles -->
        
    </head>
    <body>
        <div>
            @include('layouts.inc.navbar')
            @yield('content')
        </div>

        <script src="{{ asset('frontend/js/jquery-3.7.1.min.js') }}"></script>
        <script src="{{ asset('frontend/js/bootstrap.bundle.js') }}"></script>
    </body>
</html>
