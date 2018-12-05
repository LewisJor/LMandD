<?php

use Faker\Generator as Faker;

$factory->define(App\Order::class, function (Faker $faker) {
    return [
        'orderedBy' => $faker->text(10),
        'quantity' => $faker->randomNumber(5),
        'request_date' => $faker->date(),
        'email' => $faker->email

    ];
});
