<?php

namespace App;

use App\Packages\Commentable\Commentable;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use Commentable;
    public function user()
    {
        return $this->belongsTo('App\User');
    }
	
	public function writer()
    {
        return $this->hasOne('App\Writer', 'user_id', 'user_id');
    }

    public function screenshot()
    {
        return $this->hasMany('App\ArticleScreenshot', 'article_id', 'id');
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
