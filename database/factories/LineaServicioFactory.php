<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\LineaServicio;
use Faker\Generator as Faker;

$factory->define(LineaServicio::class, function (Faker $faker) {

    return [
        'lsv_nombre' => $faker->word,
        'created_at' => $faker->word,
        'updated_at' => $faker->word,
        'deleted_at' => $faker->word
    ];
});
