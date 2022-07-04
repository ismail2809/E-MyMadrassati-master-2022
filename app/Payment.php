<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    public function etudiants(){

        return $this->belongsTo('App\Etudiant','etudiant_id');
        
    } 

    public function années(){

        return $this->belongsTo('App\Année','annee_id');
        
    }

    public function inscriptions(){

        return $this->belongsTo('App\Inscription','inscription_id');
        
    }

    public function professeurs(){

        return $this->belongsTo('App\Professeur','professeur_id');
        
    } 
    public function renouvelements(){

        return $this->belongsTo('App\Renouvelement','renouvelement_id');
        
    }
    
}
