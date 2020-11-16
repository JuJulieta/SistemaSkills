<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\PerfilDetalle;
use Faker\Generator as Faker;

$factory->define(PerfilDetalle::class, function (Faker $faker) {

    return [
        'per_id' => $faker->randomDigitNotNull,
        'skl_id' => $faker->randomDigitNotNull,
        'nvl_id' => $faker->randomDigitNotNull,
        'psk_comentario' => $faker->text,
        'created_at' => $faker->word,
        'updated_at' => $faker->word,
        'deleted_at' => $faker->word
    ];
});
