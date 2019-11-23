<?php

use Illuminate\Database\Seeder;

class TacheTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tache')->insert([
            
            'libelle' =>"libelle"
        
        ]);
    }
}
