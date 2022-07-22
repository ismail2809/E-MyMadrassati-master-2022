<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type_paiement extends Model
{ 
    public function paiement(){
        return $this->hasMany('App\Paiement');
    }
}
