<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Customer;
use App\Kasut\dummy;
use App\Kasut\Faker as KasutFaker;
use App\User;
use Faker\Generator as Faker;

$factory->define(Customer::class, function (Faker $faker) {
    return [
        'user_id' => factory(User::class)->create(),
        'name' => $faker->name(),
        'photo' => KasutFaker::randomInArray(dummy::profiles()),
        // 'photo' => $faker->randomElement(dummy::profiles()),
        'created_at' => $faker->dateTimeBetween($startDate = '-3 years', $endDate = 'now', $timezone = null),
    ];
});
