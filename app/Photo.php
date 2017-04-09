<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
	  protected $fillable = ['title', 'filename', 'user_id'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function comments()
    {
        return $this->morphMany('App\Comment', 'commentable');
    }

}
