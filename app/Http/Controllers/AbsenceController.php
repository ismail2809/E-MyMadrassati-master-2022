<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Année;
use App\Classe;
use App\Matiere;
use App\Inscription;
use App\User;
use App\Absence;
use Session;
use App\Etudiant;
use App\Professeur;

class AbsenceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function new_absence($id)
    {   $id_classe = $id;
        $classe = Classe::where('id',$id_classe)->with('categories','niveaus')->first();
        $annee_id = Session::get('année');  
        $année = Année::where('id',$annee_id)->first();      
        $allClasses= Inscription::where('annee_id',$annee_id)->where('classe_id',$id_classe)->with('classes','classes.categories','classes.niveaus','etudiants','etudiants.users','années')->get(); 

        $matieres = Matiere::all(); 
        $professeurs = Professeur::with('users')->get();
 
        return view('absence.new',compact('allClasses','matieres','id_classe','classe','professeurs','année'));
    }

    public function store_absence(Request $request)
    {            
        $annee_id     = Session::get('année');         
        $professeur   = Professeur::where('user_id',$request->professeur_id)->first();
        $etudiants    = $request->etudiant_id;              
        $absences     = $request->absence;              
        $observations = $request->observation;  
        $debutseance  = $request->debutseance;  
        $finseance    = $request->finseance; 
        $justifications = $request->justification;

        foreach($etudiants as $key => $etudiant){ 

             if(!empty($absences[$etudiant])){       

                $absence = new Absence();     
                $absence->professeur_id = $professeur->id;    
                $absence->matiere_id    = $request->matiere_id;    
                $absence->annee_id      = $annee_id;        
                $absence->classe_id     = $request->classe_id; 
                $absence->semestre      = $request->semestre;  
                $absence->etudiant_id   = $etudiant;
                $absence->absence       = $absences[$etudiant];  
                $absence->observation   = $observations[$etudiant];
                $absence->date          = $request->date; 
                $absence->debutseance   = $debutseance[$etudiant]; 
                $absence->finseance     = $finseance[$etudiant]; 
                $absence->justification = $justifications[$etudiant];
                 //dd($absence);
                $absence->save(); 
            }
        }

        return redirect('/liste_absences');
    } 

    public function index()
    {          
        $annee_id = Session::get('année');

        $absences  = Absence::with('matieres','années','classes.categories','classes.niveaus','professeurs.users','etudiants.users')->get();

        return view('absence.index',compact('absences'));
    } 

    public function show($id){
        
        $absence = Absence::where('id',$id)->with('matieres','classes.categories','classes.niveaus','professeurs.users','etudiants.users','années')->first();

        return view('absence.show',compact('absence'));        
    }

    public function edit($id){
        
        $absence = Absence::where('id',$id)->with('matieres','classes.categories','classes.niveaus','professeurs.users','etudiants.users','années')->first();
        $matieres = Matiere::all(); 
        $professeurs = Professeur::with('users')->get();
        
        return view('absence.edit',compact('absence','matieres','professeurs'));        
    }

    public function update(Request $request,$id){  
 
        $absence = Absence::find($id);      
        $absence->professeur_id = $request->professeur_id;                   
        $absence->matiere_id    = $request->matiere_id;                   
        $absence->absence       = $request->absence;  
        $absence->observation   = $request->observation;
        $absence->date          = $request->date;         
        $absence->debutseance   = $request->debutseance;  
        $absence->finseance     = $request->finseance;  
        $absence->semestre      = $request->semestre;  
        $absence->justification = $request->justification;  
        $absence->save();  

        return redirect('/absence/'.$id.'/détail');
    }


    public function destroy(Request $request,$id){

        $absence = Absence::find($id);
        $absence->delete();

        return redirect('/liste_absences');        
    }

  
}
