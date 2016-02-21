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
			this.on('sending', function(file, xhr, formData){
				formData.append('full_width', $('[name="full_width"]').val());
				formData.append('full_height', $('[name="full_height"]').val());
				formData.append('thumb_width', $('[name="thumb_width"]').val());
				formData.append('thumb_height', $('[name="thumb_height"]').val());
				formData.append('override_deduplication', $('[name="override_deduplication"]').is(':checked'));
			});
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

    $('#giveaway-key-button').click(function(){
        var input = $('#giveaway-key-input').val();
        var key = makeKey(input);
        $.ajax({
          type: "POST",
          url: "/k",
          data: {gamekey: key.ciphertext.toString()},
          success: function(json){
            var link = "https://" + document.domain + "/k/" + json.id + "#" + key.key.toString();
             $('#put-links-here').val($('#put-links-here').val() + link + '\n\n'); 
          },
          error: function(){
            alert("something broked");
          },
          dataType: "json"
        });
    });
});

function makeKey(key)
{
    var salt = CryptoJS.lib.WordArray.random(128/8); 
    var key256Bits = CryptoJS.PBKDF2(CryptoJS.lib.WordArray.random(128/8), salt, { keySize: 256/32 }); 
    var ciphertext = CryptoJS.AES.encrypt(key, key256Bits.toString());
    var magicalunicorn = {key: key256Bits, ciphertext: ciphertext};
    return magicalunicorn;
}

function decryptKey(string, key)
{
    var bytes  = CryptoJS.AES.decrypt(string, key);
    var plaintext = bytes.toString(CryptoJS.enc.Utf8);
    return plaintext;
}

function recaptchaCallback()
{
    $.ajax({
      type: "POST",
      url: "/k/getKey/" + $('#game-id').val(),
      data: {'g-recaptcha-response': $('#g-recaptcha-response').val()},
      success: function(json){
       var ciphertext = json.gamekey;
       var key = window.location.hash.substring(1);
       var bad = decryptKey(ciphertext, key);
       $('#key-go-here').text(bad);
       $('.g-recaptcha').remove();
      },
      error: function(){
        alert('something broke');
      },
      dataType: "json"
    });
}