<?php

namespace App\Packages\Commentable;


trait Commentable
{
    /**
     * This model has many comments.
     *
     * @return Comment
     */
    public function comments()
    {
        return $this->morphMany('App\Packages\Commentable\Comment', 'commentable');
    }
}