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
                    <button>Administrate</button>
                    @endallows
                </div>
            </div>
        </div>
    </div>
@endsection