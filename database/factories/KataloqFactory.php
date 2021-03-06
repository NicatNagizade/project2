<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Kataloq;
use Faker\Generator as Faker;

$factory->define(Kataloq::class, function (Faker $faker) {
    return [
        'ad' => $faker->realText(10),
        'sekil' => $faker->imageUrl(),
        'qeyd' => $faker->realText(100)
    ];
});
