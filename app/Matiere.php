<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matiere extends Model
{
     public function note(){
        return $this->hasMany('App\Note');
    }

    public function absence(){
        return $this->hasMany('App\Absence');
    }
    
}
