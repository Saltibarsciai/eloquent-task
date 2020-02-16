<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\CarManagement;
use Faker\Generator as Faker;

$factory->define(CarManagement::class, function (Faker $faker) {
    return [
        "car_id" => $faker->unique()->numberBetween(1, 2000),
        "segment_id" => $faker->numberBetween(1, 4),
        "user_id" => $faker->numberBetween(1, 20),
    ];
});
