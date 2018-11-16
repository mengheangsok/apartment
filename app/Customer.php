<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    public function room() {
        return $this->belongsToMany('App\Room');
    }
}
