<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Demandedocument;
use App\Année;

class DemandedocumentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function create()
    { 
        $années = Année::all();

        return view('demandedocument.new',compact('années'));
    }

    public function index()
    { 
        $demandes = Demandedocument::with('users')->get();
         //dd($demandes);
        return view('demandedocument.index',compact('demandes'));
    }
    
    public function store(Request $request){
        
        $demandedocument              = new Demandedocument();
        $demandedocument->user_id     = $request->user_id;        
        $demandedocument->sujet       = $request->sujet;        
        $demandedocument->annee_id    = $request->annee_id;        
        $demandedocument->description = $request->description;      
        $demandedocument->save();

        return redirect('dashboard');
    }
}
