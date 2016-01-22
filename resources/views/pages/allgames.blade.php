@extends('layouts.standard')
@section('head')
    <link href="{{ elixir('css/list.css') }}" rel="stylesheet" type="text/css">
@endsection
@section('content')
<div class="jumbotron">
	<div class="container">
		<h1 id="Home">Games List</h1>
	</div>
</div>

<div id="gamelist">
<div class="container">

<!-- .................................................... -->

	@foreach($games as $game)
	<div class="row">
		<div class="col-md-4">
			<div class="thumbnail">
				<a href="/games/{{$game->slug}}" style="color:inherit"><h4>{{$game->title}}</h4></a>
				<a href="/games/{{$game->slug}}"><img src="{{$game->temporary_jumbo_image}}"></a>
			</div>
		</div>
	</div>
	@endforeach
</div>
</div>
@endsection