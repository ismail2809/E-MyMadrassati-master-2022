<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Classe; 
use App\Categorie; 
use App\Niveau;

class ClasseController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('permission:classe-list|classe-create|classe-edit|classe-delete', ['only' => ['index','store']]);
        $this->middleware('permission:classe-create', ['only' => ['create','store']]);
        $this->middleware('permission:classe-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:classe-delete', ['only' => ['destroy']]);
    }
    
    public function index()
    {
        $classes = Classe::with('categories','niveaus')->get();
         return view('classe.index',compact('classes'));
    }

    public function create()
    {     
        $categories = Categorie::all();
        $niveaux = Niveau::all();

        return view('classe.new',compact('niveaux','categories'));
    }

    public function store(Request $request){
        
        $classe         = new Classe();
        $classe->titre = $request->titre;        
        $classe->description = $request->description;        
        $classe->categorie_id = $request->categorie_id;        
        $classe->niveau_id = $request->niveau_id;        
        $classe->save();

        return redirect('/classes')->with('success','Classe est ajoutée avec succès');
    }

    public function edit($id){

        $classe = Classe::find($id);
        return view('classe.edit',['classe'=>$classe]);
    }
    
    public function update($id,Request $request){
        
        $classe        = Classe::find($id);
        $classe->titre = $request->titre; 
        $classe->description = $request->description;         
        $classe->categorie_id = $request->categorie_id;        
        $classe->niveau_id = $request->niveau_id;    

        $classe->save();

        return redirect('/classes')->with('warning','Classe est modifiée avec succès');
    }

    public function destroy(Request $request,$id){

        $classe = Classe::find($id);
        $classe->delete();

        return redirect('/classes')->with('error','Classe est supprimée avec succès');        
    }
}
