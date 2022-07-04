<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classe extends Model
{
    public function niveaus(){

        return $this->belongsTo('App\Niveau','niveau_id');
        
    }
    public function absence(){
        return $this->hasMany('App\Absence');
    }

    public function inscription(){
        return $this->hasMany('App\Inscription');
    }
    
    public function note(){
        return $this->hasMany('App\Note');
    }
    public function categories(){

        return $this->belongsTo('App\Categorie','categorie_id');
        
    }
    public function renouvelements(){
        return $this->hasMany('App\Renouvelement');        
    }
}

