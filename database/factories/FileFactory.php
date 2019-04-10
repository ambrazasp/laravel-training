<?php

use App\File;
use Faker\Generator as Faker;

$factory->define(File::class, function (Faker $faker) {
    return [
        'filename' => $faker->sentence(2),
        'size' => $faker->numberBetween(0, 100000),
        'post_id' => $faker->numberBetween(1, 10),
        'content' => $faker->paragraph(6)
    ];
});
