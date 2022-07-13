<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class ContactController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {   $contacts= Contact::all();
        return view('contact.index',compact('contacts'));
    }

    public function new(Request $request)
    {
        return view('contact.new');
    }

    public function store(Request $request)
    {    
        $contact         = new Contact();
        $contact->name  = $request->name;        
        $contact->objet  = $request->objet;        
        $contact->email  = $request->email;        
        $contact->telephone  = $request->telephone;        
        $contact->message = $request->message;        
        $contact->save();
        
        return back();
    }

    public function show($id)
    {  
       $contact = Contact::where('id',$id)->first();
       return view('contact.show',compact('contact'));
    }

    public function edit($id){
        $contact = Contact::find($id);
        return view('contact.edit',['contact'=>$contact]);
    }
    
    public function update(Request $request,$id){
        
        $contact  = Contact::find($id);
        $contact->name  = $request->name;        
        $contact->objet  = $request->objet;        
        $contact->email  = $request->email;        
        $contact->telephone  = $request->telephone;        
        $contact->message = $request->message;        
        $contact->save();

        return redirect('/contacts');
    }

}