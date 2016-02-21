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
	<h3>Security Enquiries</h3>
	<p>For general issues, security flaws or potential exploits please contact the admin at admin@ocgr.io, or preferably Posttwo who can be reached at posttwo@posttwo.pt.</p>
	<h3>Business Enquiries</h3>
	<p id="bottom">For business enquiries you can contact us at: admin@ocgr.io.  If you are a developer and are looking at the site for proof of existence and have received a email from a personal account, the acronym of my email address is jwl.</p>
</div>
	@endsection