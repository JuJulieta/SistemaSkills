<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Perfil;
use Faker\Generator as Faker;

$factory->define(Perfil::class, function (Faker $faker) {

    return [
        'per_nombre' => $faker->word,
        'per_descripcion' => $faker->text,
        'car_id' => $faker->randomDigitNotNull,
        'lsv_id' => $faker->randomDigitNotNull,
        'nvl_id' => $faker->randomDigitNotNull,
        'created_at' => $faker->word,
        'updated_at' => $faker->word,
        'deleted_at' => $faker->word
    ];
});
