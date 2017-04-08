<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
	  protected $fillable = ['title', 'units', 'room'];

    public function students()
    {
        return $this->belongsToMany('App\Student');
    }

}
