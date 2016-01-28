@extends('layouts.standard')
@section('head')
	<link href="{{ elixir('css/basic.css') }}" rel="stylesheet" type="text/css">
	<style>
	.jumbotron {
	background-image: url('/Carousel/FO4.jpg');
	}
	</style>
	@endsection
@section('content')
<div class="jumbotron">
	<div class="container">
	<h1>Contact Us</h1>
	</div>
</div>

<style>
.container {
	padding-bottom: 200px;
}
</style>

<div class="container">
	<h3>General Enquiries</h3>
	<p>For general enquiries you can contact us at: enquiries@ocgr.io</p>
	<h3>Writing Enquiries</h3>
	<p>For writing enquiries you can contact us at: writing@ocgr.io</p>
	<h3>Security Enquiries</h3>
	<p>For general issues, security flaws or potential exploits please contact the admin at admin@ocgr.io, or preferably Posttwo who can be reached at posttwo@posttwo.pt.</p>
	<h3>Business Enquiries</h3>
	<p id="bottom">For business enquiries you can contact us at: admin@ocgr.io or you may reach me at jacobwlane@gmail.com</p>
</div>
	@endsection