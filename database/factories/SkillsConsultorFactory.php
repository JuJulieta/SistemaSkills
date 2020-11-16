<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\SkillsConsultor;
use Faker\Generator as Faker;

$factory->define(SkillsConsultor::class, function (Faker $faker) {

    return [
        'con_id' => $faker->randomDigitNotNull,
        'skl_skill' => $faker->randomDigitNotNull,
        'nvl_id' => $faker->randomDigitNotNull,
        'csk_comentario' => $faker->text,
        'created_at' => $faker->word,
        'updated_at' => $faker->word,
        'deleted_at' => $faker->word
    ];
});
