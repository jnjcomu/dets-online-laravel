<!doctype html>
<html>
<head>
    <title>DET'S - @yield('title')</title>
    @include('layouts.head')
</head>
<body>

<div id="app">
    @yield('contents')
    @include('layouts.footer')
</div>

<script src="/js/app.js"></script>
</body>
</html>