<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rent extends Model
{
    public function room() {
        return $this->hasMany('App\Room');
    }

    public function customer() {
        return $this->hasMany('App\Customer');
    }
}
