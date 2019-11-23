<?php

use Illuminate\Database\Seeder;

class EtudiantTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('etudiant')->insert([
            
            'nom' =>"nom",
            'prenom' =>"prenom",
            'adresse' =>"adresse",
            'tel' =>"tel",
            'date_nais' =>"date_nais",
            'sexe' =>"sexe",
            'nationalite' =>"nationalite",
            'niveau' =>"niveau",
            'email' =>"email",
            'pwd' =>"pwd",
            'login' =>"login"
        ]);
    }
}
