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
.paddingbottom {
	padding-bottom: 200px;
}
li {
	font-size: 20px;
}
</style>

<div class="container">
	<h3>Launch Day!!!</h3>
	<p>We made it.  Welcome to all our new readers!  Here's a rundown of features we're currently adding: </p>
	<ul>
		<li>Comments sections</li>
		<p>We're working on adding a reddit style comments section in the near future</p>
		<li>More useful logins!</li>
		<p>Who knows what we'll add.  Maybe it'll be useful</p>
	</ul>
	<h3>First Update</h3>
	<p>This is the first update.  We are working on this initial rollout.</p>
</div>
<div class="paddingbottom">
<p></p>
</div>
	@endsection