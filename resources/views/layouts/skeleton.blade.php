<!doctype html>
<html>
<head>
    @include('layouts.head')
</head>
<body>

<div id="app">
    @include('layouts.header')
    @yield('contents')
    @include('layouts.footer')
</div>

<script src="/js/app.js"></script>
</body>
</html>