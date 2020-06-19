<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Teachers;
use Faker\Generator as Faker;

$factory->define(Teachers::class, function (Faker $faker) {

    return [
        'first_name' => $faker->word,
        'last_name' => $faker->word,
        'father_name' => $faker->word,
        'mother_name' => $faker->word,
        'gender' => $faker->word,
        'email' => $faker->word,
        'dob' => $faker->word,
        'phone' => $faker->word,
        'address' => $faker->text,
        'nationality' => $faker->word,
        'passport' => $faker->word,
        'status' => $faker->word,
        'dateregistered' => $faker->word,
        'user_id' => $faker->randomDigitNotNull,
        'image' => $faker->word,
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
