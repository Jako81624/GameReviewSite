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