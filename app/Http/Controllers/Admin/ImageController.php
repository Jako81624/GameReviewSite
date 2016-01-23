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
	
	public function index()
	{
		//@TODO Paginated image view
	}
    public function show()
    {
        return view('pages.Backend.imageUpload');
    }

    public function create(Request $request)
    {
        $file = Request::file('file');
		$randomFilename = str_random();
        $return['thumbnail'] = $this->makeImage($file, 200, 200, $randomFilename);
        $return['fullsize'] = $this->makeImage($file, 1920, 1080, $randomFilename);
        return $return;
    }

    protected function makeImage($file, $height, $width, $randomFilename)
    {
        $img = Image::make($file->getRealPath())->resize($height, $width);

        $path = '/app/images/';
        if($height < 250)
            $path = '/app/images/thumb/';
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
