@extends('list')
@section('head')
    <link href="{{ elixir('css/list.css') }}" rel="stylesheet" type="text/css">
@endsection
@section('content')
<div class="jumbotron">
	<div class="container">
		<h1>Games List</h1>
	</div>
</div>

<div id="gamelist">
<div class="container">

<!-- .................................................... -->

	<h3 id="A">A - E</h3>

	<div class="row">
		<div class="col-md-4">
			<div class="thumbnail">
				<h4>Crysis 3</h4>
				<img src=" /Carousel/C3.jpg">
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
				<h4>Ghost Recon: Wildlands</h4>
				<img src=" /Carousel/GRW.jpg">
			</div>
		</div>

		<div class="col-md-4">
			<div class="thumbnail">
				<h4>Just Cause 3</h4>
				<img src=" /Carousel/JC3.jpg">
			</div>
		</div>

	</div>

<!-- .................................................... -->

	<h3 id="K">K - O</h3>
	<h3 id="P">P - T</h3>
	<h3 id="H">H - L</h3>
	<h3 id="M">M - Q</h3>
	<h3 id="R">R - V</h3>
	<h3 id="W">W - Z</h3>

</div>
</div>
@endsection