<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Type;

class TypeController extends Controller
{    
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create(){

    	return view('type.new'); 
    }

    public function store(Request $request){
		
		$type 			   = new Type(); 
		$type->titre 	   = $request->input('titre');                 
		$type->description = $request->input('description');          		        
        $type->save();
        
		return redirect('/home')->with('success','type faites avec succès !');
	}

	public function index(){

        $types = type::all();
        
        return view('type.index',compact('types'));
    }

    public function edit($id){

        $type =   Type::find($id);
        
        return view('type.edit',['type'=>$type]);
    }
    
    public function update(Request $request){
        
        $type 			   = Type::find($id);        
        $type->titre 	   = $request->input('titre');                 
		$type->description = $request->input('description');          		        
        $type->save();

        return redirect('/types');
    }

    public function destroy(Request $request,$id){

        $type = Type::find($id);
        $type->delete();

        return redirect('/type');
        
    }
}
