<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\CursoSkill;
use Faker\Generator as Faker;

$factory->define(CursoSkill::class, function (Faker $faker) {

    return [
        'cur_id' => $faker->randomDigitNotNull,
        'skl_id' => $faker->randomDigitNotNull,
        'nvl_id' => $faker->randomDigitNotNull,
        'created_at' => $faker->word,
        'updated_at' => $faker->word,
        'deleted_at' => $faker->word
    ];
});
