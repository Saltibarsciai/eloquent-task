<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Car;
use Faker\Generator as Faker;

$factory->define(Car::class, function (Faker $faker) {
    return [
        "number" => $faker->unique()->randomNumber($nbDigits = 8),
        "year_made" => $faker->date("Y"),
        "model" => $faker->randomElement(["BMW", "Audi", "Mercedes"])
    ];
});
