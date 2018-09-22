<?php

use Faker\Generator as Faker;

$factory->define(App\Categorie::class, function (Faker $faker) {
    return [
        'specialite' => $faker->sentence(2),
    ];
});
