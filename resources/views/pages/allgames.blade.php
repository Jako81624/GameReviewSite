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

	@foreach($games->chunk(3) as $game)
	<div class="row">
	@foreach ($game as $single)
		<div class="col-md-4">
			<div class="thumbnail">
				@if($single->interview == true)
				<a href="/interviews/{{$single->slug}}" style="color:inherit"><h4>{{$single->title}}</h4></a>
				<a href="/interviews/{{$single->slug}}"><img src="{{$single->temporary_jumbo_image}}"></a>
				@else
				<a href="/games/{{$single->slug}}" style="color:inherit"><h4>{{$single->title}}</h4></a>
				<a href="/games/{{$single->slug}}"><img src="{{$single->temporary_jumbo_image}}"></a>
				@endif
			</div>
		</div>
	@endforeach
	</div>
	@endforeach
</div>
</div>
@endsection
