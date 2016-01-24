<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Writer extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }
	
	public function writer()
    {
        return $this->hasMany('App\Writer', 'user_id', 'id');
    }
}
