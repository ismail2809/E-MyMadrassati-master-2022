<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Etudiant;
use App\Professeur;
use Charts;
use DB;
use Auth;
use Illuminate\Support\Facades\Hash;

class PasswordController  extends Controller
{  
    public function listeUser(){
        $users =User::all();
        //dd($users);
        return view ('password.liste',compact('users'));
    }

    public function edit_password($id){
        
        $user =User::find($id);

        return view ('password.update',compact('user'));
    }

    public function update_password($id,Request $request){
        
        $user =User::find($id); 
        $user->password = Hash::make($request->password);
        $user->save();

        return back()->with('success','mot de passe est changé avec success');;
    }

}    