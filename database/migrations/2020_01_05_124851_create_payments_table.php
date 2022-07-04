<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->bigIncrements('id'); 
            $table->unsignedBigInteger('etudiant_id');            
            $table->foreign('etudiant_id')->references('id')->on('etudiants')->onDelete('cascade'); 
            $table->unsignedBigInteger('annee_id');
            $table->foreign('annee_id')->references('id')->on('années')->onDelete('cascade');
            $table->unsignedBigInteger('inscription_id');
            $table->foreign('inscription_id')->references('id')->on('inscriptions')->onDelete('cascade');
            $table->string('versement')->nullable();
            $table->string('mode')->nullable();
            $table->string('mois')->nullable();
            $table->string('description')->nullable();
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
        Schema::dropIfExists('payments');
    }
}
