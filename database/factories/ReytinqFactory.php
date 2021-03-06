<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Reytinq;
use Faker\Generator as Faker;

$factory->define(Reytinq::class, function (Faker $faker) {
    return [
        'user_id' => $faker->unique()->numberBetween(1,20),
        'client_id' => $faker->numberBetween(1,20),
        'xal' => $faker->numberBetween(1,10),
        'qeyd' => $faker->realText(300)
    ];
});
