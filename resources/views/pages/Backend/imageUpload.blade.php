@extends('layouts.standard')
@section('content')
    <div class="container nojumbo">
        <div class="row">
            <div class="col-md-8">
               <h1>Image Upload</h1>
                <div id="imageUploadDroparea" class="dropzone"></div>
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
			</div>
        </div>
    </div>
@endsection