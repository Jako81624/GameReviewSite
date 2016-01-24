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
}
