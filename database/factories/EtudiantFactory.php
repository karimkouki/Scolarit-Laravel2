<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Etudiant;
use Faker\Generator as Faker;

$factory->define(Etudiant::class, function (Faker $faker) {
    return [
        'nom' =>$faker->nom,
        'prenom' =>$faker->prenom,
        'adresse' =>$faker->adresse,
        'tel' =>$faker->tel,
        'date_nais' =>$faker->date_nais,
        'sexe' =>$faker->sexe,
        'nationalite' =>$faker->nationalite,
        'niveau' =>$faker->niveau,
        'email' =>$faker->email,
        'pwd' =>$faker->pwd,
        'login' =>$faker->login,


    ];
});
