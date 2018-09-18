<?php

use Faker\Generator as Faker;
use App\User;

$factory->define(App\Gallery::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence($nbWords = 2, $variableNbWords = true),
        'description' => $faker->text($maxNbChars = 200),
        'user_id' => $faker->numberBetween($min = 1, $max = User::count())
    ];
});