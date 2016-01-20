@extends('layouts.homeonly')
@section('content')
@section('head')
	<link href="{{ elixir('css/basic.css') }}" rel="stylesheet" type="text/css">
	<style>
	.jumbotron {
	height: 400px;
	background-image: url('/Carousel/FO4.jpg');
	background-size: cover;
	}
	</style>
<div class="jumbotron">
	<div class="container">
	<h1>Contact Us</h1>
	</div>
</div>

<div class="container">
	<h3>General Enquiries</h3>
	<p>For general inquiries you can contact us at: inquiries@ocgr.com</p>
	<h3>Writing Enquiries</h3>
	<p>For writing inquiries you can contact us at: writing@ocgr.com</p>
	<h3>Business Enquiries</h3>
	<p id="bottom">For business inquiries you can contact us at: admin@ocgr.com</p>
</div>