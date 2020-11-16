<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Consultor;
use Faker\Generator as Faker;

$factory->define(Consultor::class, function (Faker $faker) {

    return [
        'con_nombres' => $faker->word,
        'con_apellidos' => $faker->word,
        'con_comentarios' => $faker->text,
        'email' => $faker->word,
        'lsv_id' => $faker->randomDigitNotNull,
        'nvl_id' => $faker->randomDigitNotNull,
        'car_id' => $faker->randomDigitNotNull,
        'created_at' => $faker->word,
        'updated_at' => $faker->word,
        'deleted_at' => $faker->word
    ];
});
