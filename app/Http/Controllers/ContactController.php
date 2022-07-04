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

    public function formcontact(Request $request)
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