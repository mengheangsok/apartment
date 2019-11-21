<?php

use Faker\Generator as Faker;

$factory->define(App\Room::class, function (Faker $faker) {
    return [
        'name'        => $faker->unique()->sentence,
        'price'       => 5.00,
        'category_id' => function () {
            return factory(App\Category::class)->create()->id;
        },
    ];
});
