<html>
<head>
    <title>{{$title or 'Game Review Site'}}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ elixir('css/all.css') }}" rel="stylesheet" type="text/css">
	@yield('head')
    <script src="{{ elixir('js/all.js') }}"></script>
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50">
<nav class="navbar navbar-inverse navbar-fixed-top top-test">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand page-scroll" href="#featured">Game Reviews</a>
        </div>
        <div>
            <div class="collapse navbar-collapse top-test-enable" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li><a class="page-scroll" href="#featured">Featured</a></li>
                    <li><a class="page-scroll" href="#latest">Latest</a></li>
                    <li><a href="/allgames">All Games</a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>
@yield('content')
<div class="navbar-fixed-bottom">
    <p>Open-source and Unlicensed</p>
</div>

</body>
</html>
