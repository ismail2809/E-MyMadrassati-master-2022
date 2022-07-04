<?php

use Illuminate\Database\Seeder;

class NiveauSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('niveaus')->insert([
       	   [
            'titre' => 'niveau 1', 'description' => 'Crèche'],
   		   [
            'titre' => 'niveau 2 ', 'description' => 'Crèche'],
   		   [           
            'titre' => 'Petite section', 'description' => 'Maternelle'],
   		   [
            'titre' => 'Moyenne section', 'description' => 'Maternelle'],
   		   [
            'titre' => 'Grande section', 'description' => 'Maternelle'],
   		   [
            'titre' => '1ère année (CP)', 'description' => 'Primaire'],
   		   [
            'titre' => '2ème année (CE1)', 'description' => 'Primaire'],
   		   [
            'titre' => '3ème année (CE2)', 'description' => 'Primaire'],
   		   [
            'titre' => '4ème année (CM1)', 'description' => 'Primaire'],
   		   [
            'titre' => '5ème année (CM2)', 'description' => 'Primaire'],
   		   [
            'titre' => '6ème année (6ème)', 'description' => 'Primaire'],
   		   [          
            'titre' => '1ère année', 'description' => 'Collège'],
   		   [
            'titre' => '2ème année', 'description' => 'Collège'],
   		   [
            'titre' => '3ème année', 'description' => 'Collège'],
   		   [
            'titre' => '1ère année', 'description' => 'Lycée'],
   		   [
            'titre' => '2ème année', 'description' => 'Lycée'],
   		   [
            'titre' => '3ème année', 'description' => 'Lycée'],
   		   
        ]);
    }
}
