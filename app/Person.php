<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
	   protected $fillable = ['name', 'birth_date', 'parent_id'];

    public function getDates()
    {
        return ['created_at', 'updated_at', 'birth_date'];
    }

    public function parent()
    {
        return $this->belongsTo('App\Person', 'parent_id');
    }

    public function childs()
    {
        return $this->hasMany('App\Person', 'parent_id');
    }

}
