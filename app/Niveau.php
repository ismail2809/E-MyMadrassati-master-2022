<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Niveau extends Model
{
	protected $table = 'niveaus';

    public function classe(){
        return $this->hasMany('App\Classe');
    }

    public function inscription(){
        return $this->hasMany('App\Inscription');
    }
    
}
