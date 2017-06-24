<!doctype html>
<html>
<head>
    @include('layouts.head')
</head>
<body>
@include('layouts.header')

<div id="app">
    @yield('contents')
</div>

@include('layouts.footer')

<script src="/js/app.js"></script>
</body>
</html>