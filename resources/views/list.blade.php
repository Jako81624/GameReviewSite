<html>
<head>
    <title>{{$title or 'OCGR'}}</title>
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
            <a class="navbar-brand page-scroll" href="/">OCGR</a>
        </div>
        <div>
            <div class="collapse navbar-collapse top-test-enable" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li><a class="page-scroll" href="#A">A-E</a></li>
                    <li><a class="page-scroll" href="#F">F-J</a></li>
                    <li><a class="page-scroll" href="#K">K-O</a></li>
                    <li><a class="page-scroll" href="#P">P-T</a></li>
                    <li><a class="page-scroll" href="#H">H-L</a></li>
                    <li><a class="page-scroll" href="#M">M-Q</a></li>
                    <li><a class="page-scroll" href="#R">R-V</a></li>
                    <li><a class="page-scroll" href="#W">W-Z</a></li>
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