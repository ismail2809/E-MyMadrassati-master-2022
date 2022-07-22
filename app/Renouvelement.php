<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Renouvelement extends Model
{
   public function etudiants(){

        return $this->belongsTo('App\Etudiant','etudiant_id');
        
    }
     public function users(){

        return $this->belongsTo('App\User','user_id');
        
    }
    public function années(){

        return $this->belongsTo('App\Année','annee_id');
        
    }     
    public function classes(){

        return $this->belongsTo('App\Classe','classe_id');
        
    }

    public function categories(){

        return $this->belongsTo('App\Categorie','categorie_id');
        
    }  

    public function absence(){

        return $this->hasMany('App\Absence');
        
    } 
}
