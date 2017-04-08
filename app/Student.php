<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['name', 'date_of_birth', 'gender'];

    public function courses()
    {
        return $this->belongsToMany('App\Course');
    }

}
