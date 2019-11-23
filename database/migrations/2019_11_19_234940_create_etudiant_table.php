<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEtudiantTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('etudiant', function (Blueprint $table) {
            $table->bigIncrements('idetudiant');
            $table->timestamps();
            $table->string('nom');
            $table->string('prenom');
            $table->string('adresse');
            $table->integer('tel');
            $table->date('date_nais');
            $table->string('sexe');
            $table->string('nationalite');
            $table->string('niveau');
            $table->string('email');
            $table->string('pwd');
            $table->string('login');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('etudiant');
    }
}
