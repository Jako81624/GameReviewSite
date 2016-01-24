<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArticleScreenshot extends Model
{
    protected $fillable = ['article_id', 'image_id', 'ip_address'];
    public function article()
    {
        return $this->belongsTo('App\Article', 'article_id', 'id');
    }
    public function image()
    {
        return $this->belongsTo('App\Image', 'image_id', 'id');
    }

    public function getIpAddressAttribute($value)
    {
        if($value != null)
            return inet_ntop($value);
    }

    public function setIpAddressAttribute($value)
    {
        $this->attributes['ip_address'] = inet_pton($value);
    }
}
