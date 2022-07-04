<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cour;

class CourController extends Controller
{
    public function index()
    {
        $cours = Cour::all();
        return view('cour.index',compact('cours'));
    }

    public function create()
    { 
        return view('cour.new');
    }

    public function store(Request $request){
        
        $cour         		 = new Cour();
        $cour->professeur_id = $request->professeur_id;        
        $cour->classe_id     = $request->classe_id;        
        $cour->matiere_id 	 = $request->matiere_id;       
        $cour->année_id 	 = $request->année_id;          
        $cour->description   = $request->description;       
        $cour->save();

        return redirect('/cours');
    }

    public function edit($id){

        $cour = Cour::find($id);
        return view('cour.edit',['cour'=>$cour]);
    }
    
    public function update(Request $request){
        
        $cour = Cour::find($id);        
        $cour->professeur_id = $request->professeur_id;        
        $cour->classe_id     = $request->classe_id;        
        $cour->matiere_id 	 = $request->matiere_id;       
        $cour->année_id 	 = $request->année_id;          
        $cour->description   = $request->description;        
        $cour->save();

        return redirect('/cours');
    }

    public function destroy(Request $request,$id){

        $cour = Cour::find($id);
        $cour->delete();

        return redirect('/classes');
        
    }
}
