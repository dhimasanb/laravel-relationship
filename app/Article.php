<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = ['title', 'content'];

    public function tags()
    {
        return $this->morphToMany('App\Tag', 'taggable');
    }
}
