<?php

use Faker\Generator as Faker;
use App\Gallery;
use App\User;

$factory->define(App\Comment::class, function (Faker $faker) {
    return [
        'comment' => $faker->text($maxNbChars = 200),
        'gallery_id' => $faker->numberBetween($min = 1, $max = Gallery::count()),
        'user_id' => $faker->numberBetween($min = 1, $max = User::count())
    ];
});