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
    <iframe src="https://ghbtns.com/github-btn.html?user=Jako81624&repo=GameReviewSite&type=fork&count=true" frameborder="0" scrolling="0" width="170px" height="20px" style="float: right; display: inline; margin-top: -27px; margin-right: -60px;"></iframe>
</div>
    @yield('modals')
<!--<footer class="footer">
	<p>Open Source and Unlicensed</p>
</footer>-->

</body>
</html>

