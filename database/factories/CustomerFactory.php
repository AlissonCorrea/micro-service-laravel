<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Customer;
use Faker\Generator as Faker;

$factory->define(Customer::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'cpf' => rand(1, 10),
        'address' => $faker->address,
    ];
});
