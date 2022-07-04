<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Année;

class AnnéeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('permission:année-list|année-create|année-edit|année-delete', ['only' => ['index','store']]);
        $this->middleware('permission:année-create', ['only' => ['create','store']]);
        $this->middleware('permission:année-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:année-delete', ['only' => ['destroy']]);
    }
    
   public function index()
    {
        $années = Année::all();
        return view('année.index',compact('années'));
    }

    public function create()
    { 
        return view('année.new');
    }
    
    public function store(Request $request){
        
        $année              = new Année();
        $année->titre = $request->titre;    
        $année->save();

        return redirect('années')->with('success','Année est ajoutée avec succès');
    }

    public function edit($id){

        $année = Année::find($id);
        return view('année.edit',['année'=>$année]);
    }
    
    public function update(Request $request,$id){
        
        $année  = Année::find($id);
        $année->titre = $request->titre;        
        $année->save();

        return redirect('/années')->with('warning','Année est modifiée avec succès');
    }

    public function destroy(Request $request,$id){

        $année= Année::find($id);
        $année->delete();

        return redirect('/années')->with('error','Année est supprimée avec succès');
        
    }
}
