@extends('layouts.homeonly')
@section('content')
@section('head')
	<link href="{{ elixir('css/basic.css') }}" rel="stylesheet" type="text/css">
	<style>
	.jumbotron {
	height: 400px;
	background-image: url('/Carousel/GRW.jpg');
	background-size: cover;
	}
	</style>
@endsection
<div class="jumbotron">
	<div class="container">
	<h1>Latest News</h1>
	</div>
</div>

<div class="container">
	<h3>First Update</h3>
	<p>This is the first update.  We are working on this initial rollout.</p>
</div>