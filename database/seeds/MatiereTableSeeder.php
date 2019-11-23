<?php

use Illuminate\Database\Seeder;

class MatiereTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('matiere')->insert([
            
            'libelle' =>"libelle"
        
        ]);
    }
}
