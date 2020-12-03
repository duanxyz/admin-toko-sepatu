<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Kasut\dummy;
use App\Kasut\Faker as KasutFaker;
use App\Photo;
use Faker\Generator as Faker;

$factory->define(Photo::class, function (Faker $faker) {
    return [
        'photo' => KasutFaker::randomInArray(dummy::itemPhotos()),
    ];
});
