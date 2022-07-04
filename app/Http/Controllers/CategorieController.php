<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categorie;
use App\Inscription;
use App\Matiere;
use Illuminate\Support\Facades\Session;

class CategorieController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('permission:categorie-list|categorie-create|categorie-edit|categorie-delete', ['only' => ['index','store']]);
        $this->middleware('permission:categorie-create', ['only' => ['create','store']]);
        $this->middleware('permission:categorie-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:categorie-delete', ['only' => ['destroy']]);
    }
    
    public function index()
    {
        $categories = Categorie::all();
        return view('categorie.index',compact('categories'));
    }

    public function create()
    { 
        return view('categorie.new');
    }
    
    public function store(Request $request){
        
        $categorie              = new Categorie();
        $categorie->titre       = $request->titre;        
        //$categorie->niveau       = $request->niveau;        
        $categorie->description = $request->description;        
        $categorie->save();
        
        return redirect('categories')->with('success','Catégorie est ajoutée avec succès');
    }

    public function edit($id){

        $categorie = Categorie::find($id);
        return view('categorie.edit',['categorie'=>$categorie]);
    }
    
    public function update(Request $request,$id){
        
        $categorie  = Categorie::find($id);
        $categorie->titre = $request->titre;   
        //$categorie->niveau       = $request->niveau;                    
        $categorie->description = $request->description;          
        $categorie->save();

        return redirect('/categories')->with('success','Catégorie est modifiée avec succès');
    }

    public function destroy(Request $request,$id){

        $categorie=Categorie::find($id);
        $categorie->delete();

        return redirect('/categories')->with('success','Catégorie est supprimée avec succès');
        
    }

    public function mesCatégories(){
        $categories = Inscription::with('categories')->get();
        //dd($categories);
        return view('categorie.mesCatégories',compact('categories'));
    }

    public function mesClasses($id){

        $annee_id = Session::get('année');
        //dd($annee_id);
        //$7annee_id = 1;
        $inscriptions = json_decode(Inscription::select('classe_id','categorie_id','annee_id')->where('categorie_id','=',$id)->where('annee_id','=',$annee_id)->with('categories','classes','années')->groupBy('classe_id')->get(),true);

        $classes = array();
        //dd($inscriptions);
        foreach ($inscriptions as $key =>$inscription) {

        $nbrEtudiants = Inscription::where('categorie_id',$id)->where('classe_id',$inscription['classe_id'])
                                   ->where('annee_id',$annee_id)->count('etudiant_id');
           

        $data[] =   ['categories' => $inscription['categories']['titre'],
                     'année'  => $inscription['années']['titre'],
                     //'niveau' => $inscription['categories']['niveau'],
                     'classe' => $inscription['classes']['titre'],
                     'id_classe' => $inscription['classes']['id'],
                     'nbrEtudiants' => $nbrEtudiants
                    ];   
        $classes = $data;                                        

        }        
        return view('categorie.mesClasses',compact('classes'));
    }

     public function mesEtudiants($id){

        $annee_id = Session::get('année');
        $etudiants = json_decode(Inscription::where('classe_id',$id)->where('annee_id',$annee_id)
                                    ->with('categories','classes','années','etudiants.users')->get(),true);
        // Session::forget('etudiants');
        // Session::push('etudiants',$etudiants);

        return view('categorie.mesEtudiants',compact('etudiants'));
    }

    public function absenceEtudiants($id){        

        $annee_id = Session::get('année');

        $matieres  = Matiere::all(); 
        $etudiants = json_decode(Inscription::where('classe_id',$id)->where('annee_id',$annee_id)
                                    ->with('categories','classes','années','etudiants.users')->get(),true);

        return view('categorie.absence',compact('matieres','etudiants'));
    }

    public function noteEtudiants($id){

        $annee_id = Session::get('année');
        $matieres  = Matiere::all(); 
        $etudiants = json_decode(Inscription::where('classe_id',$id)->where('annee_id',$annee_id)
                                    ->with('categories','classes','années','etudiants.users')->get(),true);
        
        return view('categorie.note',compact('matieres','etudiants'));
    }
    
    public function addPaymentEtudiants($id){ 
        
        $annee_id = Session::get('année');
        $etudiants = json_decode(Inscription::where('classe_id',$id)->where('annee_id',$annee_id)
                                    ->with('categories','classes','années','etudiants.users')->get(),true);
        //dd($etudiants);

        return view('categorie.addPaymentEtudiants',compact('etudiants'));
    }
    
}
