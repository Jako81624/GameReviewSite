@extends('layouts.review')
@section('head')
    <link href="{{ elixir('css/review.css') }}" rel="stylesheet" type="text/css">
    <style>
        .jumbotron {
            background-image: url('{{$temporary_jumbo_image}}');
        }
    </style>
@endsection

@section('content')
    <div class="jumbotron">
        <div class="container">
            <h1 id="Top">{{$title}}</h1>
        </div>
    </div>
    <div id="review">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    @allows('article.admin')
                    @endallows
                    {!! $contents !!}
                </div>
                <div class="col-md-4">
					@if($store == 'steam' && isset($store_app_id))
					<iframe src="http://store.steampowered.com/widget/{{$store_app_id}}" frameborder="0" width="646" height="190"></iframe>
					@endif
					<script src="https://www.reddit.com/r/rocketleague/.embed?limit=5&t=all&style=off" type="text/javascript"></script>
					Article By: {{$user['name']}}<br/>
                    @allows('article.admin')
					<h3>Administration</h3>
					<table class="table table-condensed table-hover" style="width: 60%">
						<tr><th>Property</th><th>Value</th></tr>
						<tr><td>ID</td><td>{{$id}}</td></tr>
						<tr><td>SLUG</td><td>{{$slug}}</td></tr>
						<tr><td>STORE</td><td>{{$store or 'N/A'}}</td></tr>
						<tr><td>APPID</td><td>{{$sotre_app_id or 'N/A'}}</td></tr>
						<tr><td>PUBLIC</td><td>{{$published}}</td></tr>
						<tr><td>CREATED</td><td>{{$created_at}}</td></tr>
					</table>
                    @endallows
                </div>
            </div>
        </div>
    </div>
@endsection