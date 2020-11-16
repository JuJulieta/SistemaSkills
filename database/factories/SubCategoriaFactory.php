<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\SubCategoria;
use Faker\Generator as Faker;

$factory->define(SubCategoria::class, function (Faker $faker) {

    return [
        'scat_nombre' => $faker->word,
        'scat_descripcion' => $faker->text,
        'cat_id' => $faker->randomDigitNotNull,
        'created_at' => $faker->word,
        'updated_at' => $faker->word,
        'deleted_at' => $faker->word
    ];
});
