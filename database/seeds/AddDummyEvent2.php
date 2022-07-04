<?php

use Illuminate\Database\Seeder;
use App\Event;

class AddDummyEvent extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
        	['title'=>'Demo Event-1', 'start_date'=>'2017-09-11', 'end_date'=>'2017-09-12','professeur_id'=>'1','classe_id'=>'1','matiere_id' =>'1','année_id' =>'1','description' =>'test'],
        	['title'=>'Demo Event-2', 'start_date'=>'2017-09-11', 'end_date'=>'2017-09-13','professeur_id'=>'1','classe_id'=>'1','matiere_id' =>'1','année_id' =>'1','description' =>'test'],
        	['title'=>'Demo Event-3', 'start_date'=>'2017-09-14', 'end_date'=>'2017-09-14','professeur_id'=>'1','classe_id'=>'1','matiere_id' =>'1','année_id' =>'1','description' =>'test'],
        	['title'=>'Demo Event-3', 'start_date'=>'2017-09-17', 'end_date'=>'2017-09-17','professeur_id'=>'1','classe_id'=>'1','matiere_id' =>'1','année_id' =>'1','description' =>'test'],
        ];
        foreach ($data as $key => $value) {
        	Event::create($value);
        }
 
    }
}
