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
					<p></p>
					<h2>Rating: {!!$score!!}/10 - {!!$score_text!!}</h2>
					<p></p>
					
					<h2 id="Screenshots">Screenshots</h2>
					{!!$screenshots!!}
					@foreach($screenshot as $screen)
						<div class="col-md-4">
							<div class="thumbnail">
								<a href="//{{env('APP_CDN_DOMAIN')}}/{{$screen['image']['file']}}"><img src="//{{env('APP_CDN_DOMAIN')}}/thumb/{{$screen['image']['thumbnail_file']}}"></a>
							</div>
						</div>
					@endforeach
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

					@allows('article.edit')
						<a href="{!! action('Admin\ArticleController@edit', [$id]) !!}">Edit</a><br />
					@endallows
					@if(Auth::check())
						@if(Auth::user()->id == $user_id AND $published == 0 AND app('Permissions')->check('article.editown'))
							<a href="{!! action('Admin\ArticleController@edit', [$id]) !!}">Edit Before Publishing</a><br />
						@endif
					@endif


                <div class="row">

					@allows('article.admin')
    				<div class="col-md-12">
        				<div class="media">
            				<a class="pull-left" href="#">
                				<img class="media-object dp img-circle" src="//cdn.ocgr.io/Hn5A0D9saHSp16p7.png" style="width: 100px;height:100px;">
            				</a>
            				<div class="media-body">
                				<h4 class="media-heading">Name <small> Country</small></h4>
                				<h5>Role <a href="http://gridle.in">OCGR.io</a></h5>
                				<hr style="margin:8px auto">

                				<span class="label label-default">Roleshithere</span>
                				<span class="label label-default">Roleshithere</span>
                				<span class="label label-info">Roleshithere</span>
                				<span class="label label-default">Roleshithere</span>
            				</div>
        				</div>
    				</div>

				</div>
				@endallows
				
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
