@extends('layouts.list')
@section('head')
    <link href="{{ elixir('css/list.css') }}" rel="stylesheet" type="text/css">
@endsection
@section('content')
<div class="jumbotron">
	<div class="container">
		<h1 id="Home">Games List</h1>
	</div>
</div>

<div id="gamelist">
<div class="container">

<!-- .................................................... -->

	<h3 id="A">A - E</h3>

	<div class="row">
		<div class="col-md-4">
			<div class="thumbnail">
				<a href="/games/bindingofisaac" style="color:inherit"><h4>Binding Of Isaac</h4></a>
				<a href="/games/bindingofisaac"><img src="/Carousel/BindingOfIsaac/1.jpg"></a>
			</div>
		</div>
	</div>

<!-- .................................................... -->

	<h3 id="F">F - J</h3>

	<div class="row">

		<div class="col-md-4">
			<div class="thumbnail">
				<h4>Fallout 4</h4>
				<img src=" /Carousel/FO4.jpg">
			</div>
		</div>

		<div class="col-md-4">
			<div class="thumbnail">
				<a href="/games/jc3" style="color:inherit"><h4>Just Cause 3</h4></a>
				<a href="/games/jc3"><img src=" /Carousel/JC3.jpg"></a>
			</div>
		</div>

	</div>

<!-- .................................................... -->

	<h3 id="K">K - O</h3>

<!-- .................................................... -->

	<h3 id="P">P - T</h3>

	<div class="row">

		<div class="col-md-4">
			<div class="thumbnail">
				<a href="/games/relichunterszero" style="color:inherit"><h4>Relic Hunters Zero</h4></a>
				<a href="/games/relichunterszero"><img src=" /Carousel/RelicHuntersZero/1.jpg"></a>
			</div>
		</div>

		<div class="col-md-4">
			<div class="thumbnail">
				<a href="/games/rocketleague" style="color:inherit"><h4>Rocket League</h4></a>
				<a href="/games/rocketleague"><img src=" /Carousel/RocketLeague/3.jpg"></a>
			</div>
		</div>

	</div>

<!-- .................................................... -->

	<h3 id="H">H - L</h3>
	<h3 id="M">M - Q</h3>
	<h3 id="R">R - V</h3>
	<h3 id="W">W - Z</h3>

</div>
</div>
@endsection