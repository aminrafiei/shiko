<?php

use Faker\Generator as Faker;
use App\Post;

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(Post::class, function (Faker $faker) {

    return [
        'admin_id' => $faker->numberBetween(1, 4),
        'name' => $faker->name,
        'description' => $faker->text($maxNbChars = 50),
    ];
});
