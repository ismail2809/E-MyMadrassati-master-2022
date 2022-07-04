<?php

use Illuminate\Database\Seeder;

class AnnéeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('années')->insert([
            [
             	'titre' => '2020/2021' 
            ],
             
            [
             	'titre' => '2021/2022' 
            ],
            
            [
             	'titre' => '2022/2023' 
            ],
            
        ]);
    }
}
