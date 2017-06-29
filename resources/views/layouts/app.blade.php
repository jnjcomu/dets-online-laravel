<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    @include('layouts.head')
</head>
<body>

<div id="app">
    @yield('contents')
    @include('layouts.footer')
</div>

<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>