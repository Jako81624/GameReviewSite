<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
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
