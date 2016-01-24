$(document).ready(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    Dropzone.autoDiscover = false;
    $("div#imageUploadDroparea").dropzone({
        url: "/admin/uploadImage",
        headers: {
            'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
        },
        init: function(){
            this.on('success', function(file, response){
                console.log(file);
                console.log(response);
                $('#uploadedImagesLinks > tbody:last-child').append('<tr><td>'+ response.fullsize.filename +'</td><td>Full</td><td><a href="http://cdn.ocgr.io/'+ response.fullsize.file +'">'+ response.fullsize.file +'</a></td></tr>');
                $('#uploadedImagesLinks > tbody:last-child').append('<tr><td>'+ response.thumbnail.filename +'</td><td>Thumb</td><td><a href="http://cdn.ocgr.io/thumb/'+ response.thumbnail.file +'">'+ response.thumbnail.file +'</a></td></tr>');
            })
        }

    });
    $("div#imageScreenshotUploadDroparea").dropzone({
        url: "/admin/uploadImage",
        headers: {
            'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
        },
        init: function(){
            this.on('success', function(file, response){
                console.log(response.fullsize.id);
                $('<input>').attr({
                    type: 'hidden',
                    name: 'screenshot[]',
                    value: response.fullsize.id
                }).appendTo('.articleForm');
            })
        }

    });
});