<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Booking;
use Carbon\Carbon;

$factory->define(Booking::class, function (Faker $faker) {
    $from =  Carbon::instance($faker->dateTimeBetween('-1 month', '+1 month'));
    $to = (clone $from)->addDays(random_int(0, 14));

    return [
        'from' => $from,
        'to' => $to
    ];
});