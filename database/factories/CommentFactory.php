<?php

use Faker\Generator as Faker;

$factory->define(App\Comment::class, function (Faker $faker) {
    return [
        'author' => $faker->name,
        'email' => $faker->safeEmail,
        'post_id' => $faker->numberBetween(1, 10),
        'content' => $faker->paragraph(6)
    ];
});
