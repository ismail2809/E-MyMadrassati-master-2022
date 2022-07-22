<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Type_paiement;  
use App\Paiement;  
use Session;
use App\Année; 
use App\Inscription; 
use App\Classe; 
use PDF;

class PaiementController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth'); 
    }
    
    public function index()
    {
        $paiements = Paiement::with('années','type_paiements','etudiants','etudiants.users')->get();
        //dd($paiements);
         return view('paiement.index',compact('paiements'));
    }

    public function create()
    {    
        $annee_id = Session::get('année');  

        $années = Année::all();
        $type_paiements = Type_paiement::all();
        $inscriptions= Inscription::where('annee_id',$annee_id)->with('classes','categories','etudiants','etudiants.users','années')->get(); 

        return view('paiement.new',compact('années','type_paiements','inscriptions','annee_id'));
    }

    public function store(Request $request){
        //dd($request);
        $type_paiements = $request->type_paiement_id; 

        foreach($type_paiements as $key => $type_paiement){       

                $paiement                   = new Paiement();
                $paiement->annee_id         = $request->annee_id;   
                $paiement->etudiant_id      = $request->etudiant_id; 
                $paiement->type_paiement_id = $type_paiement;          
                $paiement->versement        = $request->versement;          
                $paiement->mode             = $request->mode;          
                $paiement->mois             = $request->mois;              
                $paiement->description      = $request->description;  
                $paiement->save();  
        }

        return redirect('/paiements')->with('success','paiement est ajoutée avec succès');
    }

    public function edit($id){

        $paiement = Paiement::where('id',$id)->with('années','type_paiements','etudiants','etudiants.users')->first();
        $response =   Inscription::where('etudiant_id',$paiement->etudiant_id)->with('classes')->first();
        $type_paiements = Type_paiement::all();
        $années = Année::all();
         
        return view('paiement.edit',compact('paiement','response','type_paiements','années'));   
    }
    
    public function update($id,Request $request){
        
        $paiement           = Paiement::find($id);
        $paiement->annee_id         = $request->annee_id;          
        $paiement->etudiant_id      = $request->etudiant_id;          
        $paiement->type_paiement_id = $request->type_paiement_id;          
        $paiement->versement        = $request->versement;          
        $paiement->mode             = $request->mode;          
        $paiement->mois             = $request->mois;              
        $paiement->description      = $request->description;        
        $paiement->save();

        return redirect('/paiement/'.$id.'/détail');
    }

    public function destroy(Request $request,$id){

        $paiement = Paiement::find($id);
        $paiement->delete();

        return redirect('/paiements')->with('error','paiement est supprimée avec succès');        
    }

    public function show($id){
        
        $paiement = Paiement::where('id',$id)->with('années','type_paiements','etudiants','etudiants.users')->first();
        $response =   Inscription::where('etudiant_id',$paiement->etudiant_id)->with('classes')->first();
        
        
        return view('paiement.show',compact('paiement','response'));        
    }


    public function getAllClasses(){ 
        $annee_id = Session::get('année');
        $allClasses= Inscription::where('annee_id',$annee_id)->groupby('classe_id')->with('classes','classes.categories','classes.niveaus','etudiants','etudiants.users','années')->get(); 
                
        //dd($allClasses);
        return view('paiement.allClasses',compact('allClasses'));
    } 

    public function new_paiement($id)
    {   $id_classe = $id;
        $classe = Classe::where('id',$id_classe)->with('categories','niveaus')->first();
        $annee_id = Session::get('année');        
        $allClasses= Inscription::where('annee_id',$annee_id)->where('classe_id',$id_classe)->with('classes','classes.categories','classes.niveaus','etudiants','etudiants.users','années')->get();  
        $année = Année::where('id',$annee_id)->first(); 
 
        return view('paiement.new_par_classe',compact('allClasses','id_classe','classe','année'));
    }

    public function newPaiementByEtudiant($id)
    {        
        $annee_id = Session::get('année');  
        $années = Année::all();
        $type_paiements = Type_paiement::all();
        $etudiants= Inscription::where('annee_id',$annee_id)->where('etudiant_id',$id)->with('classes','classes.categories','classes.niveaus','etudiants','etudiants.users','années')->first();  
        $historiques = $this->historiquePaiementsByOneEtudiant($id); 
        //dd($historiques);
        
        return view('paiement.new_par_etudiant',compact('etudiants','années','type_paiements','annee_id','historiques'));
    }

    public function historiquePaiement($id){
        
        $annee_id = Session::get('année');          
        $historiques = Paiement::where('etudiant_id',$id)->where('annee_id',$annee_id)->with('années','type_paiements','etudiants','etudiants.users')->get();
        $response =   Inscription::where('etudiant_id',$id)->where('annee_id',$annee_id)->with('classes')->first();      
        
        return view('paiement.historique',compact('historiques','response'));        
    }

    public function historiquePaiementsByOneEtudiant($id){
        $annee_id = Session::get('année');          
        $historiques = Paiement::where('etudiant_id',$id)->where('annee_id',$annee_id)->with('années','type_paiements','etudiants','etudiants.users')->get();

        return $historiques;
    }

    public function imprimerAttestationPaiement($id){
        $annee_id = Session::get('année');          
        
        $historiques = $this->historiquePaiementsByOneEtudiant($id);
        $response =   Inscription::where('etudiant_id',$id)->where('annee_id',$annee_id)->with('classes')->first();      

        $data = ['title' => 'Welcome to HDTuto.com']; 
        $pdf = PDF::loadView('paiement/attestation_paiement', ['historiques'=>$historiques,'response' => $response]); 
        //return $pdf->download('attestation_paiement.pdf');

        return view('paiement.attestation_paiement', compact('historiques','response'));
    }
}
