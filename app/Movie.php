<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable = ['name', 'date_released', 'studio_id'];

    public function studio()
    {
        return $this->belongsTo('App\Studio');
    }

}
