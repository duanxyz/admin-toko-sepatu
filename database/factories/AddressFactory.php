<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Address;
use Faker\Generator as Faker;

$factory->define(Address::class, function (Faker $faker) {
    return [
        'receiver' => $faker->name(),
        'address' => $faker->address,
        'city' => $faker->city,
        'zip_code' => $faker->postcode,
        'no_phone' => $faker->e164PhoneNumber,
        'created_at' => $faker->dateTimeBetween($startDate = '-3 years', $endDate = 'now', $timezone = null),
    ];
});
