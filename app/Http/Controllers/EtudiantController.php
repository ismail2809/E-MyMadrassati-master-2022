<?php

namespace App\Http\Controllers;

use App\Etudiant;
use Illuminate\Http\Request;

class EtudiantController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $etudiants = Etudiant::with('users')->get();
        //dd($etudiants);
        return view('etudiant.index',compact('etudiants'));
    }

    public function show($id)
    {        
        $etudiant = Etudiant::where('id',$id)->with('users')->first();
        //dd($etudiant);

        return view('etudiant.show',compact('etudiant'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $etudiant           = new Etudiant();
        $etudiant->user_id  = $request->user_id;        
        $etudiant->cie      = $request->cie;        
        $etudiant->tel_pere = $request->tel_pere;       
        $etudiant->tel_mere = $request->tel_mere;          
        $etudiant->save();

        return redirect('/etudiants');
    } 

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Etudiant  $etudiant
     * @return \Illuminate\Http\Response
     */
    public function edit(Etudiant $etudiant,$id)
    {
        $etudiant = Etudiant::find($id);
        return view('etudiant.edit',['etudiant'=>$etudiant]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Etudiant  $etudiant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Etudiant $etudiant)
    {
        $etudiant = Etudiant::find($id);        
        $etudiant->user_id  = $request->user_id;        
        $etudiant->cie      = $request->cie;        
        $etudiant->tel_pere = $request->tel_pere;       
        $etudiant->tel_mere = $request->tel_mere;          
        $etudiant->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Etudiant  $etudiant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Etudiant $etudiant,$id)
    {
        $etudiant = Etudiant::find($id);
        $etudiant->delete();

        return redirect('/etudiant');
    }
}
