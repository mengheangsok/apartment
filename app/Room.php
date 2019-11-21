<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    public function category()
    {
        return $this->belongsTo('App\Category', 'category_id', 'id');
    }

    public function customer()
    {
        return $this->belongsToMany('App\Customer');
    }
}
