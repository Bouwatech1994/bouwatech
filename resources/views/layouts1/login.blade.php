<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="{{ asset('img/logo.png') }}" />
    <title>{{ config('app.name', 'GT-Contribution') }}</title>

    <!-- Styles -->
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
    <link href="{{ asset('assets/app.css') }}" rel="stylesheet">
    <script src="{{ asset('assets/app.js') }}"></script>
</head>
<body id="_bg-login">
<br><br><br><br>
    <div id="app">@yield('content')</div>
</body>
</html>
