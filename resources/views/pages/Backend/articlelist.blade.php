@extends('layouts.standard')
@section('content')
    <div class="container nojumbo">
        <div class="row">
			<div class="col-md-12">
			<h1>Articles List</h1>
				<table class="table table-condensed table-hover" id="uploadedImagesLinks">
                    <thead>
                        <tr><th>Title</th><th>Created By</th><th>Published</th></tr>
                    </thead>
                    <tbody>
						@foreach($list as $l)
							<tr>
									<td><a href="/games/{{$l->slug}}">{{$l->title}}</a></td>
									<td>{{$l->user->name}}</td>
									<td>{{($l->published ? 'yes' : 'no')}}</td>
							</tr>
						@endforeach
					</tbody>
                </table>
				{!! $list->render() !!}
			</div>
        </div>
    </div>
@endsection