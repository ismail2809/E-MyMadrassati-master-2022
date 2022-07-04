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
    
	public function create()
    {         
        $matieres = Matiere::all(); 
        $années   = Année::all();
        $classes  = Classe::all();

        return view('absence.new',compact('matieres','années','classes'));
    }

    public function form_search(Request $request)
    {   //dd($request);
		$année_id   = $request->année_id;
		$classe_id  = $request->classe_id;		
		$matiere_id = $request->matiere_id;	

		$data = json_decode(Inscription::where('classe_id',$classe_id)->where('annee_id',$année_id)->with('etudiants')->get(),true);
		//dd(json_decode($data,true));
         return view('absence.classe',compact('data','matiere_id','année_id','classe_id'));
    }

    public function store(Request $request)
    {   //dd($request); 
   		$etudiants 	  = $request->etudiant_id;              
   		$absences     = $request->absence;              
        $observations = $request->observation;  
        $debutseance  = $request->debutseance;  
   		$finseance    = $request->finseance;  
		$matiere_id   = $request->matiere_id;	
		$année        = $request->année_id;
        $classe       = $request->classe_id;
		$professeur   = $request->professeur_id;
        
        foreach($etudiants as $key => $etudiant){ 

	         if(isset($absences[$key])){       

		        $absence = new Absence(); 
		        $absence->etudiant_id   = $etudiant;    
		        $absence->professeur_id = $professeur[$key];    
		        $absence->matiere_id	= $request->input('matiere_id');    
		        $absence->annee_id 		= $année[$key];        
		        $absence->classe_id 	= $classe[$key];
		        $absence->absence 		= $absences[$key];  
		        $absence->observation 	= $observations[$key];
		        $absence->debutseance 	= $debutseance[$key]; 
		        $absence->finseance 	= $finseance[$key]; 
		        $absence->save(); 
		    }
    	}

    	return redirect('/dashboard');
    }    

    public function claase()
    {         
        $matieres = Matiere::all(); 
        $années   = Année::all();
        $classes  = Classe::all();

        return view('absence.classe',compact('matieres','années','classes'));
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

    public function getAbsencesEtudiant($id){
        $annee_id = Session::get('année');
        $absences = json_decode(Absence::where('etudiant_id',$id)->where('annee_id',$annee_id)->with('années','professeurs.users','etudiants.users','classes.categories','matieres')->get(),true); 
        //dd($absences);
        return view('categorie.absenceEtudiant',compact('absences'));            
    }

     public function getAbsencesEtudiantEp(){
        $annee_id = Session::get('année');
        $id = auth()->user()->id;
        $id_etudiant = Etudiant::where('user_id',$id)->with('users')->first();
        //dd($id,$id_etudiant);
        $absences = json_decode(Absence::where('etudiant_id',$id)->where('annee_id',$annee_id)->with('années','professeurs.users','etudiants.users','classes.categories','matieres')->get(),true); 
        
       // dd($absences); 
        return view('absence.etudiantEp',compact('absences'));
    }

    public function storeAbsence(Request $request)
    {   //dd($request); 
        $etudiants    = $request->etudiant_id;              
        $absences     = $request->absence;              
        $observations = $request->observation;  
        $debutseance  = $request->debutseance;  
        $finseance    = $request->finseance;  
        $matiere_id   = $request->matiere_id;   
        $année        = $request->année_id;
        $classe       = $request->classe_id;
        $professeur   = $request->professeur_id;
        
        foreach($etudiants as $key => $etudiant){ 

             if(isset($absences[$key])){       

                $absence = new Absence(); 
                $absence->etudiant_id   = $etudiant;    
                $absence->professeur_id = $professeur[$key];    
                $absence->matiere_id    = $matiere_id;    
                $absence->annee_id      = $année[$key];        
                $absence->classe_id     = $classe[$key];
                $absence->absence       = $absences[$key];  
                $absence->observation   = $observations[$key];
                $absence->debutseance   = $debutseance[$key]; 
                $absence->finseance     = $finseance[$key]; 
                $absence->save(); 
            }
        }

        return back()->with('success','Absence est bien ajouté !');
    }   

       public function getabsencesbyclasses(){
        $annee_id = Session::get('année');

        $absence_classes = Absence::where('annee_id',$annee_id)->groupby('matiere_id')->orderby('classe_id')->with('années','matieres','professeurs.users','classes','etudiants.users')->get();
        //dd($absence_classes);
        return view('absence.listeClasse',compact('absence_classes'));
    }

    public function getabsencesbyidclasse($id,$id_matiere){
        $annee_id = Session::get('année');

        $absence_classe = json_decode(Absence::where('annee_id',$annee_id)->where('matiere_id',$id_matiere)->orderby('classe_id')->with('années','matieres','professeurs.users','classes','etudiants.users')->get(),true);

        $sumabsence = Absence::where('annee_id',$annee_id)->where('matiere_id',$id_matiere)->orderby('classe_id')->with('années','matieres','professeurs.users','classes','etudiants.users')->count(); 
        
        $sumabsenceDay = Absence::where('annee_id',$annee_id)->where('matiere_id',$id_matiere)->orderby('classe_id')->with('années','matieres','professeurs.users','classes','etudiants.users')->whereDay('created_at','=',date('d'))->count(); 

        $sumabsenceMonth = Absence::where('annee_id',$annee_id)->where('matiere_id',$id_matiere)->orderby('classe_id')->with('années','matieres','professeurs.users','classes','etudiants.users')->whereMonth('created_at','=',date('m'))->count(); 

        $sumAbsenceRetard = Absence::where('annee_id',$annee_id)->where('absence','=','Retard')->where('matiere_id',$id_matiere)->orderby('classe_id')->with('années','matieres','professeurs.users','classes','etudiants.users')->count();
        
        $sumAbsenceA = Absence::where('annee_id',$annee_id)->where('absence','=','Absence')->where('matiere_id',$id_matiere)->orderby('classe_id')->with('années','matieres','professeurs.users','classes','etudiants.users')->count(); 
        
        //dd($sumabsence,$sumabsenceDay,$sumabsenceMonth,$sumAbsenceRetard);

        return view('absence.listeclassebyid',compact('absence_classe','sumabsence','sumabsenceDay','sumabsenceMonth','sumAbsenceRetard','sumAbsenceA'));
    }
}
