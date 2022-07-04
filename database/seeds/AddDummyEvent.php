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
        	['title'=>'Demo Event-1', 'start_date'=>'2020-08-01', 'end_date'=>'2020-08-02'],
        	['title'=>'Demo Event-2', 'start_date'=>'2020-08-01', 'end_date'=>'2020-08-03'],
        	['title'=>'Demo Event-3', 'start_date'=>'2020-08-04', 'end_date'=>'2020-08-04'],
        	['title'=>'Demo Event-3', 'start_date'=>'2020-08-07', 'end_date'=>'2020-08-07'],
        ];
        foreach ($data as $key => $value) {
        	Event::create($value);
        }
    }
}
