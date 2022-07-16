<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Note;
use App\Matiere;
use App\Classe;
use App\Année;
use App\Inscription;
use App\User;
use App\Professeur;
use App\Etudiant;
use Illuminate\Support\Facades\Session;

class NoteController extends Controller
{  
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function new_note($id)
    {    
        $id_classe = $id;
        $classe = Classe::where('id',$id_classe)->with('categories','niveaus')->first();
        $annee_id = Session::get('année');  
        $année = Année::where('id',$annee_id)->first();      
        $allClasses= Inscription::where('annee_id',$annee_id)->where('classe_id',$id_classe)->with('classes','classes.categories','classes.niveaus','etudiants','etudiants.users','années')->get(); 

        $matieres = Matiere::all(); 
        $professeurs = Professeur::with('users')->get(); 
 
        return view('note.new',compact('allClasses','matieres','id_classe','classe','professeurs','année'));
    }

    public function store_note(Request $request)
    {         
        $annee_id     = Session::get('année');         
        if(isset($request->user_id)){
            $professeur   = Professeur::where('user_id',$request->user_id)->first(); 
        }
        $etudiants    = $request->etudiant_id;              
        $notes        = $request->note;              
        $observations = $request->observation;   
        $coefficients = $request->coefficient;   

        foreach($etudiants as $key => $etudiant){ 

             if(!empty($notes[$etudiant])){       

                $note = new Note();     
                $note->professeur_id = isset($professeur->id)?$professeur->id:$request->professeur_id;    
                $note->matiere_id    = $request->matiere_id;    
                $note->annee_id      = $annee_id;        
                $note->classe_id     = $request->classe_id; 
                $note->semestre      = $request->semestre;  
                $note->etudiant_id   = $etudiant;
                $note->note          = $notes[$etudiant];  
                $note->observation   = $observations[$etudiant];  
                $note->coefficient   = $coefficients[$etudiant];  
                $note->date          = $request->date;   
                 //dd($note);
                $note->save(); 
            }
        }

        return redirect('/liste_notes');
    } 

    public function index()
    {          
        $annee_id = Session::get('année');

        $notes  = Note::with('matieres','années','classes.categories','classes.niveaus','professeurs.users','etudiants.users')->get();

        return view('note.index',compact('notes'));
    } 

    public function show($id){
        
        $note = Note::where('id',$id)->with('matieres','classes.categories','classes.niveaus','professeurs.users','etudiants.users','années')->first();

        return view('note.show',compact('note'));        
    }

    public function edit($id){
        
        $note = Note::where('id',$id)->with('matieres','classes.categories','classes.niveaus','professeurs.users','etudiants.users','années')->first();
        $matieres = Matiere::all(); 
        
        $professeurs = Professeur::with('users')->get();
        
        return view('note.edit',compact('note','matieres','professeurs'));      
    }

    public function update(Request $request,$id){  
 
        $note = Note::find($id);    
        $note->professeur_id    = $request->professeur_id;                   
        $note->matiere_id       = $request->matiere_id;                   
        $note->note             = $request->note;  
        $note->observation      = $request->observation;
        $note->coefficient      = $request->coefficient;   
        $note->semestre         = $request->semestre; 
        $note->date             = $request->date;   

        $note->save();  

        return redirect('/note/'.$id.'/détail');
    }


    public function destroy(Request $request,$id){

        $note = Note::find($id);
        $note->delete();

        return redirect('/liste_notes');        
    }

  

}
