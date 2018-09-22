<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(6),
        'description' => $faker->paragraph(5),
        'prix' => $faker->numberBetween(0,600),
        'post_type' => $faker->randomElement(['formation', 'stage']),
        'nbreleves' => $faker->numberBetween(0, 40),
        'datedebut' => $faker->dateTime('2000-05-05', null),
        'datefin' => $faker->dateTime('2018-05-05'),
    ];

});



