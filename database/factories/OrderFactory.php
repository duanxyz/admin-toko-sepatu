<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Order;
use Faker\Generator as Faker;

$factory->define(Order::class, function (Faker $faker) {
    return [
        'total_price' => $faker->numberBetween($min = 300000, $max = 15000000),
        'status' => $faker->randomElement(['Troli', 'Order', 'Paid', 'Process', 'Completed']),
        'created_at' => $faker->dateTimeBetween($startDate = '-3 years', $endDate = 'now', $timezone = null),
    ];
});
