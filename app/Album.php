<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
	  protected $fillable = ['artist_id', 'title', 'released'];

    public function artist()
    {
        return $this->belongsTo('App\Artist');
    }

    public function songs()
    {
        return $this->hasMany('App\Song');
    }

}
