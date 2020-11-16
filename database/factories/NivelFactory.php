<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Nivel;
use Faker\Generator as Faker;

$factory->define(Nivel::class, function (Faker $faker) {

    return [
        'nvl_nombre' => $faker->word,
        'nvl_descripcion' => $faker->text,
        'nvl_valor' => $faker->randomDigitNotNull,
        'created_at' => $faker->word,
        'updated_at' => $faker->word,
        'deleted_at' => $faker->word
    ];
});
