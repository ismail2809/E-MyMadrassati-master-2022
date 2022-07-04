<?php

use Illuminate\Database\Seeder;

class CategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
        	[
            	'titre' => 'Crèche', 'description' => ''
            ],

            [ 
            	'titre' => 'Maternelle ', 'description' => ''
            ],
            [
            	'titre' => 'Primaire', 'description' => ''
            ],
            
            [
            	'titre' => 'Collège', 'description' => '' 
            ],
            [
            	'titre' => 'Lycée', 'description' => ''
        	],
        ]);
    }
}
