<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Matiere;

class MatiereController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('permission:matiere-list|matiere-create|matiere-edit|matiere-delete', ['only' => ['index','store']]);
        $this->middleware('permission:matiere-create', ['only' => ['create','store']]);
        $this->middleware('permission:matiere-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:matiere-delete', ['only' => ['destroy']]);
    }
    
      public function index()
    {
        $matieres = Matiere::all();
        return view('matiere.index',compact('matieres'));
    }

    public function create()
    { 
        return view('matiere.new');
    }
    
    public function store(Request $request){

        $matiere              = new Matiere();
        $matiere->titre       = $request->titre;        
        $matiere->description = $request->description;        
        $matiere->save();
        
        return redirect('matieres')->with('success','Matière est ajoutée avec succès');
    }

    public function edit($id){

        $matiere = Matiere::find($id);
        return view('matiere.edit',['matiere'=>$matiere]);
    }
    
    public function update(Request $request,$id){
        
        $matiere  = Matiere::find($id);
        $matiere->titre = $request->titre;        
        $matiere->description = $request->description;          
        $matiere->save();

        return redirect('/matieres')->with('warning','Matière est modifiée avec succès');
    }

    public function destroy(Request $request,$id){

        $matiere=Matiere::find($id);
        $matiere->delete();

        return redirect('/matieres')->with('error','Matière est supprimée avec succès');
        
    }
}
