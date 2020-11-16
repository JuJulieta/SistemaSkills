<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\CursoConsultor;
use Faker\Generator as Faker;

$factory->define(CursoConsultor::class, function (Faker $faker) {

    return [
        'cur_id' => $faker->randomDigitNotNull,
        'con_id' => $faker->randomDigitNotNull,
        'created_at' => $faker->word,
        'updated_at' => $faker->word,
        'deleted_at' => $faker->word
    ];
});
