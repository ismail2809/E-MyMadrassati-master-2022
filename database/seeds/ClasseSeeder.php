<?php

use Illuminate\Database\Seeder;

class ClasseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('classes')->insert([
       		   [
            	'titre' => 'classe 1', 'description' => 'Crèche', 'niveau_id' => '1' 
            ],
       		   [
            	'titre' => 'classe 2 ', 'description' => 'Crèche', 'niveau_id' => '2'
            ],
       		   [
            	'titre' => 'classe 3', 'description' => 'Maternelle Petite section', 'niveau_id' => '3' 
            ],
       		   [
            	'titre' => 'classe 4', 'description' => 'Moyenne section Maternelle', 'niveau_id' => '4' 
            ],
       		   [
            	'titre' => 'classe 5', 'description' => 'Grande section Maternelle', 'niveau_id' => '5' 
            ],
			   [
            	'titre' => 'classe 6', 'description' => '1ère année Primaire', 'niveau_id' => '6' 
            ],
       		   [
            	'titre' => 'classe 7', 'description' => '2ème année Primaire', 'niveau_id' => '7' 
            ],
       		   [
            	'titre' => 'classe 8', 'description' => '3ème année Primaire', 'niveau_id' => '8' 
            ],
       		   [
            	'titre' => 'classe 9', 'description' => '4ème année Primaire', 'niveau_id' => '9' 
            ],
       		   [
            	'titre' => 'classe 10', 'description' => '5ème année Primaire', 'niveau_id' => '10' 
            ],
       		   [
            	'titre' => 'classe 11', 'description' => '6ème année Primaire', 'niveau_id' => '11' 
            ],
       		   [
            	'titre' => 'classe 12', 'description' => '1ère année Collège', 'niveau_id' => '12' 
            ],
       		   [
            	'titre' => 'classe 13', 'description' => '2ème année Collège', 'niveau_id' => '13' 
            ],
       		   [
            	'titre' => 'classe 14', 'description' => '3ème année Collège', 'niveau_id' => '14' 
            ],
			   [
            	'titre' => 'classe 15', 'description' => '1ère année Lycée', 'niveau_id' => '15' 
            ],
       		   [
            	'titre' => 'classe 16', 'description' => '2ème année Lycée', 'niveau_id' => '16' 
            ],
       		   [
            	'titre' => 'classe 17', 'description' => '3ème année Lycée', 'niveau_id' => '17' 
            ],

        ]);
    }
}
