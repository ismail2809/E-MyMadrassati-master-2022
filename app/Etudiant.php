<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{    
    public function absence(){
        return $this->hasMany('App\Absence');
    }
    
    public function inscription(){
        return $this->hasMany('App\Inscription');
    }
    
    public function note(){
        return $this->hasMany('App\Note');
    }

    public function users(){
        return $this->belongsTo('App\User','user_id');        
    }

    public function payment(){
        return $this->hasMany('App\Payment');
    }
    public function renouvelements(){
        return $this->hasMany('App\Renouvelement');        
    }
}
