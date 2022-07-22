<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Type_paiement;  

class type_paiementController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth'); 
    }
    
    public function index()
    {
        $type_paiements = Type_paiement::all();
        //dd($type_paiements);
         return view('type_paiement.index',compact('type_paiements'));
    }

    public function create()
    {      
        return view('type_paiement.new');
    }

    public function store(Request $request){
        
        $type_paiement           = new Type_paiement();
        $type_paiement->titre    = $request->titre;        
        $type_paiement->montant  = $request->montant;        
        $type_paiement->description = $request->description;         
        $type_paiement->save();

        return redirect('/type_paiements')->with('success','type_paiement est ajoutée avec succès');
    }

    public function edit($id){

        $type_paiement = Type_paiement::find($id); 

        return view('type_paiement.edit',['type_paiement'=>$type_paiement]);
    }
    
    public function update($id,Request $request){
        
        $type_paiement           = Type_paiement::find($id);
        $type_paiement->titre    = $request->titre;       
        $type_paiement->montant  = $request->montant;         
        $type_paiement->description = $request->description;         
        $type_paiement->save();

        return redirect('/type_paiements')->with('warning','type_paiement est modifiée avec succès');
    }

    public function destroy(Request $request,$id){

        $type_paiement = Type_paiement::find($id);
        $type_paiement->delete();

        return redirect('/type_paiements')->with('error','type_paiement est supprimée avec succès');        
    }
}
