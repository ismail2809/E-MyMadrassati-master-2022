<?php

namespace App\Http\Controllers;

use App\Renouvelement;
use Illuminate\Http\Request;
use App\Inscription;
use App\Classe;
use App\Année;
use App\Etudiant;
use App\User;  
use App\Categorie;   
use App\Payment;  
use App\Absence;  
use App\Note;
use Illuminate\Support\Facades\Hash;
use Session;

class RenouvelementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function new($id)
    { 
        $inscription =   Inscription::where('id',$id)->with('années','classes','etudiants.users')->first();
        $années = Année::all();
        $classes = Classe::all();  

        return view('renouvelement.new',compact('années','classes','inscription'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$id){
        $ancien_inscription = Inscription::find($id);        
        $inscription = new Inscription();        
        $etudiant = Etudiant::where('id',$ancien_inscription->etudiant_id)->first();
        
        $user = User::where('id',$etudiant->user_id)->first();
        //dd($inscription,$ancien_inscription);

            $user->prenom   = $request->prenom;       
            $user->nom      = $request->nom;
            $user->email    = $request->email;
            $user->ddn      = $request->ddn;
            $user->lieu_naissance  = $request->lieu_naissance;
            $user->sexe     = $request->sexe;
            $user->tel      = $request->tel;
            $user->adresse  = $request->adresse; 
            $user->role     = "etudiant"; 

            $user->save();               
             
            $etudiant->user_id           =  $user->id;        
            $etudiant->prenom_tuteur     =  $request->prenom_tuteur;        
            $etudiant->nom_tuteur        =  $request->nom_tuteur;       
            $etudiant->tel_tuteur        =  $request->tel_tuteur;          
            $etudiant->email_tuteur      =  $request->email_tuteur;          
            $etudiant->sexe_tuteur       =  $request->sexe_tuteur;          
            $etudiant->profession_tuteur =  $request->profession_tuteur;  
            $etudiant->save();

            $inscription->etudiant_id     = $etudiant->id; 
            $inscription->num_inscription = $request->num_inscription; 
            $inscription->classe_id       = $request->classe_id;
            $inscription->annee_id        = $request->année_id;  

            $inscription->tarif           = $request->tarif;       
            $inscription->modalité        = $request->modalité;               
            $inscription->transport       = $request->transport;
            $inscription->cantine         = $request->cantine;               
            $inscription->description     = $request->description;

         $inscription->save();

        return redirect('/inscriptions');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Renouvelement  $renouvelement
     * @return \Illuminate\Http\Response
     */
    public function show(Renouvelement $renouvelement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Renouvelement  $renouvelement
     * @return \Illuminate\Http\Response
     */
    public function edit(Renouvelement $renouvelement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Renouvelement  $renouvelement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Renouvelement $renouvelement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Renouvelement  $renouvelement
     * @return \Illuminate\Http\Response
     */
    public function destroy(Renouvelement $renouvelement)
    {
        //
    }
}
