<?php

use Faker\Generator as Faker;

$factory->define(App\Customer::class, function (Faker $faker) {
    return [
        'name'  => $faker->firstName,
        'email' => $faker->unique()->safeEmail,
        'phone' => $faker->unique()->tollFreePhoneNumber,
    ];
});
