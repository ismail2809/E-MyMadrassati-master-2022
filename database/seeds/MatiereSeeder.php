<?php

use Illuminate\Database\Seeder;

class MatiereSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('matieres')->insert([
            [ 'titre' => 'Math', 'description' => 'Mathématique'],  
            [ 'titre' => 'Arabe', 'description' => 'Langue Arabe'],  
            [ 'titre' => 'Français', 'description' => 'Langue Français'],  
            [ 'titre' => 'Anglais', 'description' => 'Langue Anglais'],  
            [ 'titre' => 'Sport', 'description' => 'Sport'],  
            [ 'titre' => 'Education islamique', 'description' => 'Education islamique'],  
            [ 'titre' => 'Physiue', 'description' => 'Physiue'],
   		   
        ]);
    }
}
