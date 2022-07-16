<?php

namespace App\Http\Controllers;

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

class InscriptionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
	public function create(){
        $années = Année::all();
        $classes = Classe::all();
        $catégories = Categorie::all(); 
    	return view('inscription.new',compact('années','classes','catégories')); 
    }
 
    public function store(Request $request){ 
		$inscription 			  = new Inscription();         

            $user           = new User();
            $user->prenom   = $request->prenom;                         
            $user->nom      = $request->nom;
            $user->email    = $request->email;
            $user->password = bcrypt('123456');
            $user->ddn      = $request->ddn;
            $user->lieu_naissance  = $request->lieu_naissance;
            $user->sexe     = $request->sexe;
            $user->tel      = $request->tel;
            $user->adresse  = $request->adresse;
              /*  if($request->hasfile('avatar')){ 
                    $user->avatar   = $request->avatar->store('avatar');
                } 
                else{
                    $user->avatar = "default-avatar.png";
                }*/
            $user->role     = "etudiant";
            $user->password = hash::make('123456');
            $user->save();               
            
            $etudiant                    = new Etudiant();                 
            $etudiant->user_id           = $user->id;        
            $etudiant->prenom_tuteur     = $request->prenom_tuteur;        
            $etudiant->nom_tuteur        = $request->nom_tuteur;       
            $etudiant->tel_tuteur        = $request->tel_tuteur;          
            $etudiant->email_tuteur      = $request->email_tuteur;          
            $etudiant->sexe_tuteur       = $request->sexe_tuteur;          
            $etudiant->profession_tuteur = $request->profession_tuteur;           
            $etudiant->save();

        $inscription->etudiant_id     = $etudiant->id; 
        $inscription->num_inscription = $request->num_inscription;  
        //$inscription->categorie_id    = $request->categorie_id;  
		$inscription->classe_id       = $request->classe_id;	
		$inscription->annee_id 	      = $request->année_id;  

 		$inscription->tarif           = $request->tarif;       
        $inscription->modalité        = $request->modalité;               
        $inscription->transport       = $request->transport;                
		$inscription->cantine 	      = $request->cantine;               
		$inscription->description     = $request->description;         
        $inscription->save();
        
		return redirect('/inscriptions')->with('success','Inscription est bien ajouté !');
	}

	public function index(){ 

        $inscriptions= Inscription::with('classes','categories','etudiants','etudiants.users','années')->get(); 
        $années = Année::all();
        $classes = Classe::all();
        $catégories = Categorie::all();

        return view('inscription.index',compact('inscriptions','années','classes','catégories'));
    }

    public function edit($id){

        $inscription =   Inscription::where('id',$id)->with('années','classes','etudiants.users')->first();
        $années = Année::all();
        $classes = Classe::all();  

        return view('inscription.edit',compact('années','classes','inscription'));
    }
    
    public function update(Request $request,$id){
        $inscription = Inscription::find($id);        
        $etudiant = Etudiant::where('id',$inscription->etudiant_id)->first();
        
        $user = User::where('id',$etudiant->user_id)->first();
        //dd($inscription,$etudiant,$user);

            $user->prenom   = $request->prenom;       
            $user->nom      = $request->nom;
            $user->email    = $request->email;
            $user->ddn      = $request->ddn;
            $user->lieu_naissance  = $request->lieu_naissance;
            $user->sexe     = $request->sexe;
            $user->tel      = $request->tel;
            $user->adresse  = $request->adresse;
             /*   if($request->hasfile('avatar')){ 
                    $user->avatar   = $request->avatar->store('avatar');
                } */
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

        return redirect('/inscriptions')->with('warning','Inscription est modifié avec succès');
    }

    public function destroy(Request $request,$id){

        $inscription = Inscription::find($id);
        $inscription->delete();

        return redirect('/inscriptions')->with('error','Inscription est supprimé avec succès');
        
    }

    public function show($id){
        //from id isncription get user_id
        $detail = $this->detailEtudiant($id);  
        return view('inscription.show',compact('detail'));     
    }


    public function getAllClasses(){ 
        $annee_id = Session::get('année');
        $allClasses= Inscription::where('annee_id',$annee_id)->groupby('classe_id')->with('classes','classes.categories','classes.niveaus','etudiants','etudiants.users','années')->get(); 
                
        //dd($allClasses);
        return view('absence.allClasses',compact('allClasses'));
    } 

    public function detailEtudiant($id){

        $inscription = json_decode(Inscription::find($id),true); 
        $annee = json_decode(Année::where('id',$inscription['annee_id'])->first(),true);
        $classe =json_decode(Classe::where('id',$inscription['classe_id'])->with('niveaus','categories')->first(),true);

        $etudiant = json_decode(Etudiant::where('id',$inscription['etudiant_id'])->with('users')->first(),true); 
        //dd($etudiant);

        /*$historiquePayements = json_decode(Payment::where('inscription_id',$inscription['id'])
                                                ->where('annee_id',$inscription['annee_id'])->get(),true);  */      
        /*
        $historiqueAbsences = json_decode(Absence::where('annee_id',$inscription['annee_id'])
                                                ->where('etudiant_id',$inscription['etudiant_id'])
                                                ->where('classe_id',$inscription['classe_id'])->with('matieres','professeurs.users')->get(),true);
        $historiqueNotes = json_decode(Note::where('annee_id',$inscription['annee_id'])
                                                ->where('etudiant_id',$inscription['etudiant_id'])
                                                ->where('classe_id',$inscription['classe_id'])->with('classes','matieres','professeurs.users')->get(),true);
        */
        /*$sum_payement = Payment::where('inscription_id','=',$id)
                               ->where('annee_id','=',$inscription['annee_id'])
                               ->where('etudiant_id','=',$inscription['etudiant_id'])->sum('versement');*/
        $detail = [];
        $detail['inscription']=isset($inscription)?$inscription:'';                               
        $detail['etudiant']= isset($etudiant)?$etudiant:'';                               
        $detail['user']= isset($etudiant['users'])?$etudiant['users']:'';                               
        $detail['annee']= isset($annee)?$annee:'';                                       
        $detail['classe']= isset($classe)?$classe:'';   
        //dd($detail);                        

        return $detail; 
    }

}