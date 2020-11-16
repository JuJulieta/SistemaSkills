<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Cargo;
use Faker\Generator as Faker;

$factory->define(Cargo::class, function (Faker $faker) {

    return [
        'car_nombre' => $faker->word,
        'car_descripcion' => $faker->text,
        'created_at' => $faker->word,
        'updated_at' => $faker->word,
        'deleted_at' => $faker->word
    ];
});
