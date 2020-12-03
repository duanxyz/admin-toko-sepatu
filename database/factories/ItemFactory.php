<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Brand;
use App\Item;
use App\Kasut\dummy;
use App\Kasut\Faker as KasutFaker;
use Faker\Generator as Faker;

$brand =  Brand::all();
$factory->define(Item::class, function (Faker $faker) {
    return [
        'brand_id' => $faker->numberBetween($min = 1, $max = 17),
        'category_id' => $faker->numberBetween($min = 1, $max = 18),
        'name' => KasutFaker::randomInArray(dummy::itemNames()),
        'price' => $faker->numberBetween($min = 100000, $max = 15000000),
        'stock' => $faker->numberBetween($min = 20, $max = 150),
        'weight' => $faker->numberBetween($min = 400, $max = 2000),
        'condition' => $faker->randomElement(['Baru', 'Bekas']),
        'sold' => $faker->numberBetween($min = 400, $max = 2000),
        'seen' => $faker->numberBetween($min = 400, $max = 2000),
        'description' => $faker->realText($maxNbChars = 200, $indexSize = 2),
        'created_at' => $faker->dateTimeBetween($startDate = '-3 years', $endDate = 'now', $timezone = null),
    ];
});
