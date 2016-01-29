<?php

namespace App\Packages\Commentable;
use Illuminate\Database\Eloquent\Model;

class CommentMeta extends Model
{
    protected $table = 'comments_meta';

    public function comment()
    {
        return $this->belongsTo('App\Packages\Commentable\Comment');
    }
}