<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name'];

    public function room(){
    	return $this->hasMany('App\Room','category_id');
    }
}
