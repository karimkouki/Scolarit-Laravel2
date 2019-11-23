<?php

use Illuminate\Database\Seeder;

class ExamenTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('examen')->insert([
            
            'libelle' =>"libelle"
        
        ]);
    }
}
