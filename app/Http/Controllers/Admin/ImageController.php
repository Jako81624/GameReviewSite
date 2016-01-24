<?php

namespace App\Http\Controllers\Admin;

use App\Tools\Permissions;
use Clockwork\Support\Laravel\Facade as Clockwork;
use Illuminate\Support\Facades\Request;
use Intervention\Image\Facades\Image;
use App\Image as Images;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

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
		$return['previous'] = Images::groupBy('file')->orderBy('id', 'desc')->paginate(20);
        return view('pages.Backend.imageUpload', $return);
    }

    public function create(Request $request)
    {
        $file = Request::file('file');
		$randomFilename = str_random();
        $return['fullsize'] = $this->makeImage($file, 1920, 1080, $randomFilename);
        $return['thumbnail'] = $this->makeImage($file, 200, 200, $randomFilename, $return['fullsize']);
        return $return;
    }

    protected function makeImage($file, $height, $width, $randomFilename, $thumbnail=null)
    {
        $md5 = md5_file($file->getRealPath());
        if($thumbnail != null)
            $img = Image::make($file)->resize($height);
        else
            $img = Image::make($file)->fit($height, $width);
        $path = 'images/';
        if($thumbnail != null)
            $path = 'images/thumb/';

        $image = Images::where('md5_hash', $md5)->first();
        if($image === null or $image->thumbnail_file == null) {
            Clockwork::info('Storing on Filesystem');
            $img->save(storage_path() . '/app/' . $path . $randomFilename . '.png', 90);
        }
        if($image === null and $thumbnail === null) {
            Clockwork::info('New Image');
            $image = new Images;
            $image->user_id = Auth::user()->id;
            $image->filename = $file->getClientOriginalName();
            $image->file = $randomFilename . '.png';
            $image->height = $height;
            $image->width = $width;
            $image->md5_hash = $md5;
        }elseif($thumbnail != null AND $image->thumbnail_file == null){
            Clockwork::info('Thumbnail Updated');
            $image->thumbnail_file = $randomFilename . '.png';
        }
        $image->save();
        return $image;
    }
}
