<?php

namespace App\Http\Controllers;

use App\Professeur;
use App\User;
use Illuminate\Http\Request;

class ProfesseurController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $professeurs = Professeur::all();
        return view('professeur.index',compact('professeurs'));
    }

    public function show($id)
    {        
        $professeur = Professeur::where('id',$id)->with('users')->first(); 

        return view('professeur.show',compact('professeur'));
    }

    public function create(){
     
        return view('professeur.new');
    }

    public function store(Request $request){
        
        $user         = new User();        
        $user->prenom = $request->prenom;
        $user->nom    = $request->nom;
        $user->email    = $request->email;
        $user->email    = $request->email;
        $user->ddn    = $request->ddn;
        $user->lieu_naissance = $request->lieu_naissance;
        $user->sexe   = $request->sexe;
        $user->tel    = $request->tel;
        $user->adresse= $request->adresse; 
 
        if($request->hasfile('avatar')){
             $user->avatar = $request->avatar->store('avatar');
        }         
        $user->save();

        $professeur                  = new Professeur();  
        $professeur->user_id         = $user->id;         
        $professeur->cin             = $request->cin;       
        $professeur->diplome         = $request->diplome;
        $professeur->promo           = $request->promo;        
        if(isset($user) && isset($professeur)){                        
                    $user->save();
                    $professeur->save();   
        }

        return redirect('/professeurs');
    } 

    public function edit($id){

        $professeur = Professeur::find($id);
        return view('professeur.edit',['professeur'=>$professeur]);
    }
    
    public function update(Request $request){
        
        $professeur = Professeur::find($id);
        $professeur = user::find($professeur->user_id);

        $user->prenom = $request->prenom;
        $user->nom    = $request->nom;
        $user->email    = $request->email;
        $user->email    = $request->email;
        $user->ddn    = $request->ddn;
        $user->lieu_naissance = $request->lieu_naissance;
        $user->sexe   = $request->sexe;
        $user->tel    = $request->tel;
        $user->adresse= $request->adresse; 
 
        if($request->hasfile('avatar')){
             $user->avatar = $request->avatar->store('avatar');
        }         
        $user->save();

        $professeur                  = new Professeur();  
        $professeur->user_id         = $user->id;         
        $professeur->cin             = $request->cin;       
        $professeur->diplome         = $request->diplome;
        $professeur->promo           = $request->promo;        
        
        $professeur                  = new Professeur();  
        $professeur->user_id         = $request->user_id;         
        $professeur->cin             = $request->cin;       
        $professeur->diplome         = $request->diplome;
        $professeur->promo           = $request->promo;        
        if(isset($user) && isset($professeur)){                        
                    $user->save();
                    $professeur->save();   
        }


        return redirect('/professeurs');
    }

    public function destroy(Request $request,$id){

        $professeur = Professeur::find($id);
        $professeur->delete();

        return redirect('/professeurs');
        
    }
}