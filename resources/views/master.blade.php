<html>
<head>
    <title>{{$title or 'OCGR'}}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ elixir('css/all.css') }}" rel="stylesheet" type="text/css">
	@yield('head')
    <script src="{{ elixir('js/all.js') }}"></script>
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50">
<nav class="navbar navbar-inverse navbar-fixed-top top-test">
    @yield('navbar')
</nav>
    @yield('content')
<div class="navbar navbar-default navbar-fixed-bottom">
    <p>Open-source and Unlicensed</p>
</div>
    @yield('modals')
<!--<footer class="footer">
	<p>Open Source and Unlicensed</p>
</footer>-->

</body>
</html>

