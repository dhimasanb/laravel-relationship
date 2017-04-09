<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
	  protected $fillable = ['content', 'user_id'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function comments()
    {
        return $this->morphMany('App\Comment', 'commentable');
    }

}
