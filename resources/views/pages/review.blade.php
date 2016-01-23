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
					{!!$intro!!}
					<h2 id="Gameplay">Gameplay</h2>
                    {!!$gameplay!!}
					<h2 id="Story">Story</h2>
					{!!$story!!}
					<h2 id="Graphics">Graphics, Settings and Performance</h2>
					{!!$graphics!!}
					<h2 id="Conclusion">Conclusion</h2>
					{!!$conclusion!!}
					<h2>--------------------------------------</h2>
					<h2>Rating: {{$score}}/10 - {{$score_text}}</h2>
					<h2>--------------------------------------</h2>
					
					<h2 id="Screenshots">Screenshots</h2>
					{!!$screenshots!!}
                </div>
                <div class="col-md-4">
					@if($store == 'steam' && isset($store_app_id))
						<iframe src="http://store.steampowered.com/widget/{{$store_app_id}}" frameborder="0" width="100%" height="190"></iframe>
					@endif
					@if(isset($subreddit))
						<div id="reddit">
							<script src="https://www.reddit.com/r/{{$subreddit}}/top/.embed?limit=5&t=day"></script>
						</div>
					@endif
					Article By: {{$user['name']}}<br/>
                    @allows('article.admin')
					<h3>Administration</h3>
					<table class="table table-condensed table-hover" style="width: 60%">
						<tr><th>Property</th><th>Value</th></tr>
						<tr><td>ID</td><td>{{$id}}</td></tr>
						<tr><td>SLUG</td><td>{{$slug}}</td></tr>
						<tr><td>STORE</td><td>{{$store or 'N/A'}}</td></tr>
						<tr><td>APPID</td><td>{{$store_app_id or 'N/A'}} <a href="http://store.steampowered.com/app/{{$store_app_id or '0'}}/" target="_blank">view</a></td></tr>
						<tr><td>REDDIT</td><td>{{$subreddit or 'N/A'}}</td></tr>
						<tr><td>PUBLIC</td><td>{{$published}}</td></tr>
						<tr><td>CREATED</td><td>{{$created_at}}</td></tr>
					</table>
                    @endallows
                </div>
            </div>
        </div>
    </div>
@endsection