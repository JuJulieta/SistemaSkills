<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\SkillsConsultores;
use Faker\Generator as Faker;

$factory->define(SkillsConsultores::class, function (Faker $faker) {

    return [
        'con_id' => $faker->randomDigitNotNull,
        'skl_id' => $faker->randomDigitNotNull,
        'nvl_id' => $faker->randomDigitNotNull,
        'csk_comentario' => $faker->text,
        'created_at' => $faker->word,
        'updated_at' => $faker->word,
        'deleted_at' => $faker->word
    ];
});
