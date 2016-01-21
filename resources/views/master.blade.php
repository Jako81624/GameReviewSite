<html>
<head>
    <title>{{$title or 'OCGR'}}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ elixir('css/all.css') }}" rel="stylesheet" type="text/css">
	@yield('head')
    <script src="{{ elixir('js/all.js') }}"></script>
    <style>
    	.footer {
  		/*position: static;
  		margin-top: -60px;
  		height: 60px;
  		clear:both;
  		text-align: center;
  		line-height: 60px;
  		color: #fff;
  		vertical-align: middle;
  		font-family: "Quicksand";
  		background-color: #222;
		}
		.footer p {
  			margin: 0 0 0;
		*/}
    .navbar-fixed-bottom {
      height: 60px;
      background-color: #222;
      border-color: transparent;
    }
    .navbar-fixed-bottom p {
        color: #fff;
        text-align: center;
        padding-top: 18px;
    }
    .btn-primary {
        background-color: #333;
        border-color: #333;
    }
    .btn {
        border: 0px;
    }
    .btn:focus, .btn:active:focus, .btn.active:focus, .btn.focus, .btn:active.focus, .btn.active.focus {
        outline: 0px;
    }
    </style>
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50">
<nav class="navbar navbar-inverse navbar-fixed-top top-test">
    @yield('navbar')
</nav>
    @yield('content')
<div class="navbar navbar-default navbar-fixed-bottom">
    <p>Open-source and Unlicensed</p>
</div>

<!--<footer class="footer">
	<p>Open Source and Unlicensed</p>
</footer>-->

</body>
</html>

