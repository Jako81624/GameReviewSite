@extends('layouts.review')
@section('head')
    <link href="{{ elixir('css/review.css') }}" rel="stylesheet" type="text/css">
    <style>
        .jumbotron {
            background-image: url('{{$article->temporary_jumbo_image}}');
        }
    </style>
@endsection

@section('content')
    <div class="jumbotron">
        <div class="container">
            <h1 id="Top">{{$article->title}}</h1>
        </div>
    </div>
    <div id="review">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    @allows('article.admin')
                    @endallows
					{!!$article->intro!!}
					<h2 id="Gameplay">Gameplay</h2>
                    {!!$article->gameplay!!}
					<h2 id="Story">Story</h2>
					{!!$article->story!!}
					<h2 id="Graphics">Graphics, Settings and Performance</h2>
					{!!$article->graphics!!}
					<h2 id="Conclusion">Conclusion</h2>
					{!!$article->conclusion!!}
					<p></p>
					<h2>Rating: {!!$article->score!!}/10</h2>
					<p></p>
					<p>{!!$article->score_text!!}</p>
					<p></p>
					
					<h2 id="Screenshots">Screenshots</h2>
					{!!$article->screenshots!!}
					@foreach($article->screenshot as $article->screen)
						<div class="col-md-4">
							<div class="thumbnail">
								<a data-lightbox="screenies" href="//{{env('APP_CDN_DOMAIN')}}/{{$article->screen['image']['file']}}"><img style="width: 100%" src="//{{env('APP_CDN_DOMAIN')}}/thumb/{{$article->screen['image']['thumbnail_file']}}"></a>
							</div>
						</div>
					@endforeach
                </div>
                <div class="col-md-4">
					@if($article->store == 'steam' && isset($article->store_app_id))
						<iframe src="//store.steampowered.com/widget/{{$article->store_app_id}}" frameborder="0" width="100%" height="190"></iframe>
					@endif
					@if(isset($article->subreddit))
						<div id="reddit">
							<script src="https://www.reddit.com/r/{{$article->subreddit}}/top/.embed?limit=5&t=day"></script>
						</div>
					@endif

					@allows('article.edit')
						<a href="{!! action('Admin\ArticleController@edit', [$article->id]) !!}">Edit</a><br />
					@endallows
					@if(Auth::check())
						@if(Auth::user()->id == $article->user_id AND $article->published == 0 AND app('Permissions')->check('article.editown'))
							<a href="{!! action('Admin\ArticleController@edit', [$article->id]) !!}">Edit Before Publishing</a><br />
						@endif
					@endif

                <div class="row">
    				<div class="col-md-12">
        				<div class="media">
            				<a class="pull-left" @if(isset($article->writer['homepage']) && $article->writer['homepage']!="")href="{{$article->writer['homepage']}}"@endif>
                				<img class="media-object dp img-circle" src="{{$article->writer['image']}}" style="width: 100px;height:100px;">
            				</a>
            				<div class="media-body">
                				<h4 class="media-heading">{{$article->user['name']}} <small>{{$article->writer['country']}}</small></h4>
                				<h5>{{app('Permissions')->get_role($article->user['id'])}} @if(isset($article->writer['homepage']) && $article->writer['homepage']!="")<a href="{{$article->writer['homepage']}}">{{$article->writer['homepage']}}</a>@endif</h5>
                				<hr style="margin:8px auto">

                				@if(isset($article->writer['reddit']) && $article->writer['reddit']!="")<span class="label label-info"><a href="http://reddit.com/u/{{$article->writer['reddit']}}">reddit</a></span>@endif
								@if(isset($article->writer['twitter']) && $article->writer['twitter']!="")<span class="label label-info"><a href="http://twitter.com/{{$article->writer['twitter']}}">{{'@'.$article->writer['twitter']}}</a></span>@endif
                				@if(isset($article->writer['youtube']) && $article->writer['youtube']!="")<span class="label label-info"><a href="{{$article->writer['youtube']}}">YouTube</a></span>@endif
                				@if(isset($article->writer['steam']) && $article->writer['steam']!="")<span class="label label-info"><a href="{{$article->writer['steam']}}">Steam</a></span>@endif
            				</div>
        				</div>
    				</div>
    			</div>

    			<div class="row">
    				<div class="col-md-12">
    					<h2>Article Date</h2>
						<p>Published on: {{$article->created_at}}</p>
    				</div>
    			</div>

                    @allows('article.admin')
					<h3>Administration</h3>
					<table class="table table-condensed table-hover" style="width: 60%">
						<tr><th>Property</th><th>Value</th></tr>
						<tr><td>ID</td><td>{{$article->id}}</td></tr>
						<tr><td>SLUG</td><td>{{$article->slug}}</td></tr>
						<tr><td>STORE</td><td>{{$article->store or 'N/A'}}</td></tr>
						<tr><td>APPID</td><td>{{$article->store_app_id or 'N/A'}} <a href="http://store.steampowered.com/app/{{$article->store_app_id or '0'}}/" target="_blank">view</a></td></tr>
						<tr><td>REDDIT</td><td>{{$article->subreddit or 'N/A'}}</td></tr>
						<tr><td>PUBLIC</td><td>{{$article->published}}</td></tr>
						<tr><td>CREATED</td><td>{{$article->created_at}}</td></tr>
					</table>
                    @endallows
                </div>

            </div>
            @allows('beta')
            <div class="row">
	        <div class="col-md-12">
				@include('partials.comments', $x)
			</div>
			@endallows
        </div>
        </div>
    </div>
@endsection
