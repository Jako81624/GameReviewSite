<?php

namespace App\Packages\Commentable;

use Config;
use Baum\Node;
use Illuminate\Database\Eloquent\Model;


class Comment extends Node
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public $fillable = ['title', 'body'];
    /**
     * Helper method to check if a comment has children.
     *
     * @return bool
     */
    public function hasChildren()
    {
        return $this->children()->count() > 0;
    }
    /**
     * @return mixed
     */
    public function commentable()
    {
        return $this->morphTo();
    }
    /**
     * Comment belongs to a user.
     *
     * @return User
     */
    public function user()
    {
        //dd($this);
        return $this->belongsTo('App\User');
    }

    public function meta()
    {
        return $this->hasMany('App\Packages\Commentable\CommentMeta');
    }
}