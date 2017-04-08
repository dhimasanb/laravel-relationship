<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Studio extends Model
{
    protected $fillable = ['name', 'founded_at'];

    public function movies()
    {
        return $this->hasMany('App\Movie');
    }

}
