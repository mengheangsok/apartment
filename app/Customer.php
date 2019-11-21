<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    public function rent()
    {
        return $this->hasMany('App\Rent');
    }
}
