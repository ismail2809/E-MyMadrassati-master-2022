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

class AbsenceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function new_absence($id)
    {   $id_classe = $id;
        $annee_id = Session::get('année');        
        $allClasses= Inscription::where('annee_id',$annee_id)->where('classe_id',$id_classe)->with('classes','classes.categories','classes.niveaus','etudiants','etudiants.users','années')->get(); 
        $matieres = Matiere::all(); 
 
        return view('absence.new',compact('allClasses','matieres','id'));
    }

    public function store_absence(Request $request)
    {   // dd($request); 

        $annee_id = Session::get('année');         
        
        $etudiants    = $request->etudiant_id;              
        $absences     = $request->absence;              
        $observations = $request->observation;  
        $debutseance  = $request->debutseance;  
        $finseance    = $request->finseance;  

        foreach($etudiants as $key => $etudiant){ 

             if(isset($debutseance[$key])){       

                $absence = new Absence();     
                $absence->professeur_id = $request->professeur_id;    
                $absence->matiere_id    = $request->matiere_id;    
                $absence->annee_id      = $annee_id;        
                $absence->classe_id     = $request->classe_id;

                $absence->etudiant_id   = $etudiant;
                $absence->absence       = $absences[$key];  
                $absence->observation   = $observations[$key];
                $absence->debutseance   = $debutseance[$key]; 
                $absence->finseance     = $finseance[$key]; 

                //dd($absence);
                $absence->save(); 
            }
        }

        return redirect('/dashboard');
    } 

    public function index()
    {          
        $annee_id = Session::get('année');

        $absences  = json_decode(Absence::with('matieres','années','classes.categories','professeurs.users','etudiants.users')->get(),true);
        //dd($absences);
         $sumabsence = Absence::where('annee_id',$annee_id)->orderby('classe_id')->with('années','matieres','professeurs.users','classes','etudiants.users')->count(); 
        
        $sumabsenceDay = Absence::where('annee_id',$annee_id)->orderby('classe_id')->with('années','matieres','professeurs.users','classes','etudiants.users')->whereDay('created_at','=',date('d'))->count(); 

        $sumabsenceMonth = Absence::where('annee_id',$annee_id)->orderby('classe_id')->with('années','matieres','professeurs.users','classes','etudiants.users')->whereMonth('created_at','=',date('m'))->count(); 

        return view('absence.index',compact('absences','sumabsence','sumabsenceDay','sumabsenceMonth'));
    }

    public function show($id){

        $absence 	= json_decode(Absence::where('id',$id)->with('matieres','années','classes','professeurs','etudiants')->first(),true);
        $user 	    = json_decode(User::findOrfail($absence['etudiants']['user_id']),true);
        $professeur = json_decode(User::find($absence['professeurs']['user_id']),true);
        //dd($professeur);	
        return view('absence.show',['absence' => $absence , 'user' => $user ,'professeur' => $professeur]);
    }

    public function edit($id){

        $absence = json_decode(Absence::where('id',$id)->with('matieres','années','classes','professeurs','etudiants')->first(),true);        
        $matieres = Matiere::all(); 
        $années   = Année::all();
        $classes  = Classe::all();
 		//dd($absence);
        return view('absence.edit',compact('absence','matieres','années','classes'));
    }
    
    public function update(Request $request,$id){
        //dd($request);
 
        $absence = Absence::where('id',$id)->with('matieres','années','classes','professeurs','etudiants')->first();         
        $absence->etudiant_id   = isset($request->etudiant_id)? $request->etudiant_id : $absence->etudiant_id;    
        $absence->professeur_id = isset($request->professeur_id)? $request->professeur_id : $absence->professeur_id;    
        $absence->matiere_id	= isset($request->matiere_id)? $request->matiere_id : $absence->matiere_id;    
        $absence->annee_id 		= isset($request->annee_id)? $request->annee_id : $absence->annee_id;        
        $absence->classe_id 	= isset($request->classe_id)? $request->classe_id : $absence->classe_id;
        $absence->absence 		= isset($request->absence)? $request->absence : $absence->absence;  
        $absence->observation 	= isset($request->observation)? $request->observation : $absence->observation;
        $absence->debutseance 	= isset($request->debutseance)? $request->debutseance : $absence->debutseance; 
        $absence->finseance 	= isset($request->finseance)? $request->finseance : $absence->finseance; 
        $absence->save(); 

        return redirect('/absences');
    }

    public function destroy(Request $request,$id){

        $absence = Absence::find($id);
        $absence->delete();

        return redirect('/absences');        
    }

  
}
