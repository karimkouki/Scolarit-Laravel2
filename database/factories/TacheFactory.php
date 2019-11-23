<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Tache;
use Faker\Generator as Faker;

$factory->define(Tache::class, function (Faker $faker) {
    return [
      
        'libelle' =>$faker->libelle,
    ];
});
