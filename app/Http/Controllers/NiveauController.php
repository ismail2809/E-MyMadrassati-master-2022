<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Niveau;

class NiveauController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('permission:niveau-list|niveau-create|niveau-edit|niveau-delete', ['only' => ['index','store']]);
        $this->middleware('permission:niveau-create', ['only' => ['create','store']]);
        $this->middleware('permission:niveau-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:niveau-delete', ['only' => ['destroy']]);
    }
    
    public function create(){

    	return view('niveau.new'); 
    }

    public function store(Request $request){
		
		$niveau 			 = new Niveau(); 
		$niveau->titre 		 = $request->input('titre');                 
		$niveau->description = $request->input('description');          
        $niveau->save();
        
		return redirect('/niveaux')->with('success','Niveau est ajoutée avec succès');;
	}

	public function index(){

        $niveaux = Niveau::all();
        
        return view('niveau.index',compact('niveaux'));
    }

    public function edit($id){

        $niveau =   Niveau::find($id);
        
        return view('niveau.edit',['niveau'=>$niveau]);
    }
    
    public function update($id,Request $request){
        
        $niveau 			 = Niveau::find($id);        
        $niveau->titre 		 = $request->input('titre');                 
		$niveau->description = $request->input('description');       
        $niveau->save();

        return redirect('/niveaux')->with('warning','Niveau est modifiée avec succès');
    }

    public function destroy(Request $request,$id){

        $niveau = Niveau::find($id);
        $niveau->delete();

        return redirect('/niveaux')->with('error','Niveau est supprimée avec succès');;
        
    }
}
