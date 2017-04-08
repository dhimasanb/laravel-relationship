<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    protected $fillable = ['album_id', 'title', 'length'];

    public function album()
    {
        return $this->belongsTo('App\Album');
    }

}
