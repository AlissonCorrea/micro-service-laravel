<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Transaction;
use Faker\Generator as Faker;

$factory->define(Transaction::class, function (Faker $faker) {
    return [
        'accountId' => $faker->name,
        'description' => rand(1, 10) % 2 == 0 ? $faker->sentence() : null,
        'type' => $faker->creditCardType,
        'value'=> $faker->randomFloat(2, 12, 150000)
    ];
});
