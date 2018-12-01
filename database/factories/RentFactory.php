<?php

use Faker\Generator as Faker;

$factory->define(App\Rent::class, function (Faker $faker) {
    return [
        'room_id' => function (){
            return factory(App\Room::class)->create()->id;
        },
        'customer_id' => function (){
            return factory(App\Customer::class)->create()->id;
        }
    ];
});
