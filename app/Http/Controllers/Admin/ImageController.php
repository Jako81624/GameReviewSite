<?php

namespace App\Http\Controllers\Admin;

use App\Tools\Permissions;
use Illuminate\Support\Facades\Request;
use Intervention\Image\Facades\Image;
use App\Image as Images;
use Illuminate\Support\Facades\Auth;

class ImageController extends BackendController
{
    public function __construct()
    {
        if(!Permissions::check('images.upload'))
            abort(403);
    }
    public function show()
    {
        return view('pages.Backend.imageUpload');
    }

    public function create(Request $request)
    {
        $file = Request::file('file');
        $return['thumbnail'] = $this->makeImage($file, 200, 200);
        $return['fullsize'] = $this->makeImage($file, 1920, 1080);
        return $return;
    }

    protected function makeImage($file, $height, $width)
    {
        $img = Image::make($file)->resize($height, $width);

        $path = '/app/images/';
        if($height < 250)
            $path = '/app/images/thumb/';
        $randomFilename = str_random();
        $img->save(storage_path() . $path . $randomFilename . '.png', 90);
        $image = new Images;
        $image->user_id = Auth::user()->id;
        $image->filename = $file->getClientOriginalName();
        $image->file = $randomFilename . '.png';
        $image->height = $height;
        $image->width = $width;
        $image->save();
        return $image;
    }
}
