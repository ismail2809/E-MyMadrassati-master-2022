<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Calendar;
use App\Event;
use App\Classe;
use App\Professeur;
use App\Matiere;

class EventController extends Controller{
    
  public function index(){
        
        $events = [];
        $data = Event::all();
        if($data->count()) {
            foreach ($data as $key => $value) {
                $events[] = Calendar::event(
                    $value->title,
                    true,
                    new \DateTime($value->start_date),
                    new \DateTime($value->end_date.' +1 day'),
                    null,
                    // Add color and link on event
                  [
                      'color' => '#f05050',
                      'url' => 'http://127.0.0.1:8000/dashboard',
                  ]
                );
            }
        }
   
      $calendar = Calendar::addEvents($events);   

      $professeurs = Professeur::with('users')->get();
      //dd($professeurs);
      $matieres = Matiere::all(); 
      $classes = Classe::all(); 

      return view('mycalender', compact('calendar','professeurs','classes','matieres'));

    }

    public function store(Request $request){
     //        dd($request);
            $tab  = array();                    
            $tab['heure_debut'] = $request->heure_debut;
            $tab['heure_fin']   = $request->heure_fin;                      
            $tab['matiere']     = $request->matiere;  
            $tab['professeur']  = $request->professeur;                         
            $tab['classe']      = $request->classe;      
           // dd($tab);
             $tab = implode(" , ",$tab);
            $event              = new Event();
            $event->title       = $tab;  
            $event->start_date  = $request->start_date;
            $event->end_date    = $request->start_date;
            $event->classe_id   = $request->classe;   
            // dd($event);

            $event->save();

            return back();
    }

}