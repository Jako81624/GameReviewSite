@extends('layouts.standard')
@section('content')
@section('head')
	<link href="{{ elixir('css/basic.css') }}" rel="stylesheet" type="text/css">
	<style>
	.jumbotron {
	background-image: url('/Carousel/GRW.jpg');
	}
	</style>
@endsection
@section('content')
<div class="jumbotron">
	<div class="container">
	<h1>Latest News</h1>
	</div>
</div>

<style>
.container p {
	padding-bottom: 200px;
}
</style>

<div class="container">
	<h3>First Update</h3>
	<p>This is the first update.  We are working on this initial rollout.</p>
</div>
	@endsection