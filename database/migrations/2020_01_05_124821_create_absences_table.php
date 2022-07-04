<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAbsencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('absences', function (Blueprint $table) {
            $table->bigIncrements('id');             
            $table->unsignedBigInteger('professeur_id');            
            $table->foreign('professeur_id')->references('id')->on('professeurs')->onDelete('cascade');            
            $table->unsignedBigInteger('etudiant_id');            
            $table->foreign('etudiant_id')->references('id')->on('etudiants')->onDelete('cascade');
            $table->unsignedBigInteger('classe_id');
            $table->foreign('classe_id')->references('id')->on('classes')->onDelete('cascade');
            $table->unsignedBigInteger('annee_id');
            $table->foreign('annee_id')->references('id')->on('années')->onDelete('cascade');
            $table->unsignedBigInteger('matiere_id');
            $table->foreign('matiere_id')->references('id')->on('matieres')->onDelete('cascade');
            $table->time('debutseance'); 
            $table->time('finseance'); 
            $table->string('absence'); 
            $table->string('observation')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('absences');
    }
}
