<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Demandedocument extends Model
{
	public function users(){

        return $this->belongsTo('App\User','user_id');
        
    } 

    public function années(){

        return $this->belongsTo('App\Année','annee_id');
        
    }
}
