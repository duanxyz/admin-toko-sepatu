<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Review;
use Faker\Generator as Faker;

$factory->define(Review::class, function (Faker $faker) {
    return [
        'rating' => $faker->numberBetween($min = 3, $max = 5),
        'review' => $faker->realText($maxNbChars = 100, $indexSize = 2),
        'like' => $faker->numberBetween($min = 0, $max = 100),
    ];
});
