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
        </div>
    </div>
@endsection