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
		$fullsizeWidth = Request::input('full_width', null);
		$fullsizeHeight= Request::input('full_height', null);
		$thumbnailWidth = Request::input('thumb_width', 200);
		$thumbnailHeight = Request::input('thumb_height', 200);
		$overrideDeduplication = Request::input('override_deduplication', 'false');
		
        $return['fullsize'] = $this->makeImage($file, $fullsizeWidth, $fullsizeHeight, $randomFilename, null, $overrideDeduplication);
        $return['thumbnail'] = $this->makeImage($file, $thumbnailWidth, $thumbnailHeight, $randomFilename, $return['fullsize'], $overrideDeduplication);
        return $return;
    }

    protected function makeImage($file, $height=null, $width=null, $randomFilename, $thumbnail=null, $overrideDeduplication='false')
    {
		Clockwork::info('Override: ' . $overrideDeduplication);
        $md5 = md5_file($file->getRealPath());
		$img = Image::make($file);
		if(!($height == null AND $width == null))
		{
			Clockwork::info('Fitting Image');
			$img->fit($height, $width);
		}
        $path = 'images/';
        if($thumbnail != null)
            $path = 'images/thumb/';

        $image = Images::where('md5_hash', $md5)->orderBy('id', 'desc')->first();
        if($image === null or $image->thumbnail_file == null or $overrideDeduplication == 'true') {
            Clockwork::info('Storing on Filesystem');
			if($overrideDeduplication == true)
				Clockwork::info('Deduplication Overide');
            $img->save(storage_path() . '/app/' . $path . $randomFilename . '.png', 90);
        }
        if(($image === null or $overrideDeduplication == 'true') and $thumbnail === null) {
            Clockwork::info('New Image');
            $image = new Images;
            $image->user_id = Auth::user()->id;
            $image->filename = $file->getClientOriginalName();
            $image->file = $randomFilename . '.png';
            $image->height = $img->height();
            $image->width = $img->width();
            $image->md5_hash = $md5;
        }elseif($thumbnail != null AND $image->thumbnail_file == null){
            Clockwork::info('Thumbnail Updated');
            $image->thumbnail_file = $randomFilename . '.png';
        }
        $image->save();
        return $image;
    }
}
