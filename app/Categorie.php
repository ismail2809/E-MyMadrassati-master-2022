<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{ 	
	public function classe(){
        return $this->hasMany('App\Classe');
    }
     public function renouvelements(){
        return $this->hasMany('App\Renouvelement');        
    }
}