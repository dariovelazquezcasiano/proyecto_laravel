<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Producto;
use Faker\Generator as Faker;

$factory->define(Producto::class, function (Faker $faker) {
    return [
        'nombre' => $faker->unique()->word,
        'dato3' => $faker->word,
        'dato4' => $faker->word,
        'dato5' => $faker->word,
        'dato6' => $faker->word,
        'dato7' => $faker->word,
        'dato8' => $faker->word,
    ];
});
