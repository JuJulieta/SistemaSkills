<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Usuarios;
use Faker\Generator as Faker;

$factory->define(Usuarios::class, function (Faker $faker) {

    return [
        'name' => $faker->word,
        'email' => $faker->word,
        'avatar' => $faker->word,
        'email_verified_at' => $faker->date('Y-m-d H:i:s'),
        'password' => $faker->word,
        'provider' => $faker->word,
        'provider_id' => $faker->word,
        'remember_token' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
