@extends('layouts.standard')
@section('content')
@section('head')
	<link href="{{ elixir('css/basic.css') }}" rel="stylesheet" type="text/css">
	<script src='https://www.google.com/recaptcha/api.js'></script>
@endsection
@section('content')

<style>
.paddingbottom {
	padding-bottom: 200px;
}
.container {
	padding-top: 80px;
}
</style>

<div class="container">
<div class="col-md-6">
@if($game)
<input type="hidden" id="game-id" value="{{$id}}" />
<h2>Complete Captcha To Get Key</h2>
<h3 id="key-go-here"></h3>
{!! Recaptcha::render() !!}
@endif
	<h1>Keys</h1>
	<p>Put your key in here to generate a secure magical link</p>
	<div class="input-group">
  		<input type="text" class="form-control" placeholder="Keys Go Here" id="giveaway-key-input" aria-describedby="basic-addon1">
  		<span class="input-group-addon" id="basic-addon1"><3</span>
	</div>
		<button class="btn btn-success" id="giveaway-key-button" type="button">Generate Link!</button> or press enter.
</div>
<div class="col-md-6">
<h2>Links will show here</h2>
<textarea class="form-control" id="put-links-here" style="height: 50%"></textarea>
</div>
</div>
<div class="paddingbottom">
<p></p>
</div>
	@endsection