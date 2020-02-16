<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\CarStatus;
use Faker\Generator as Faker;

$factory->define(CarStatus::class, function (Faker $faker) {
    return [
        "car_id" => $faker->numberBetween(1, 2000),
        "status_id" => $faker->numberBetween(1, 4),
    ];
});
