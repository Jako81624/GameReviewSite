<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    public function screenshot()
    {
        return $this->hasOne('App\ArticleScreenshot', 'image_id', 'id');
    }
}
