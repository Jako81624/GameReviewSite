@extends('layouts.standard')
@section('content')
    <div class="container nojumbo">
        <div class="row">
            <div class="col-md-8">
               <h1>Image Upload</h1>
                <div id="imageUploadDroparea" class="row dropzone"></div>
				<div class="row col-md-12">
					<div class="col-md-3 uploadSetting">{!! Form::text('full_width', null, ['class' => 'form-control input-md', 'placeholder'=>'Full Width']) !!}</div>
					<div class="col-md-3 uploadSetting">{!! Form::text('full_height', null, ['class' => 'form-control input-md', 'placeholder'=>'Full Height']) !!}</div>
					<div class="col-md-3 uploadSetting">{!! Form::text('thumb_width', null, ['class' => 'form-control input-md', 'placeholder'=>'Thumbnail Width']) !!}</div>
					<div class="col-md-3 uploadSetting">{!! Form::text('thumb_height', null, ['class' => 'form-control input-md', 'placeholder'=>'Thumbnail Height']) !!}</div>
											<div class="checkbox"><label>{{Form::checkbox('override_deduplication', 'yes')}} Override Deduplication</label></div>
				</div>          
			</div>
            <div class="col-md-4">
                <h1>Links</h1>
                <table class="table table-condensed table-hover" id="uploadedImagesLinks">
                    <thead>
                        <tr><th>Filename</th><th>Type</th><th>Link</th></tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>
			<div class="col-md-12">
			<h1>File History</h1>
				<table class="table table-condensed table-hover" id="uploadedImagesLinks">
                    <thead>
                        <tr><th>Thumbnail</th><th>Links</th><th>Filename</th></tr>
                    </thead>
                    <tbody>
						@foreach($previous as $file)
							<tr><td><a href="//{{env('APP_CDN_DOMAIN')}}/{{$file->file}}"><img src="//{{env('APP_CDN_DOMAIN')}}/thumb/{{$file->file}}" width="100px" height="100px"/></a></td><td>https://cdn.ocgr.io/{{$file->file}} <br /> https://cdn.ocgr.io/thumb/{{$file->file}}</td><td>{{$file->filename}}</td></tr>
						@endforeach
					</tbody>
                </table>
				{!! $previous->render() !!}
			</div>
        </div>
    </div>
@endsection