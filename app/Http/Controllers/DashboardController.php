<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Etudiant;
use App\Professeur;
use App\Paiement;
use App\Inscription;
use DB; 
use Session;
use Charts;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $annee_id = Session::get('année');
        $nb_etudiants =  Inscription::where('annee_id',$annee_id)->count();
        $nb_classes =  Inscription::where('annee_id',$annee_id)->groupby('classe_id')->count();
        $professeurs = Professeur::count();
        //$paiements = Paiement::where('annee_id',$annee_id)->sum('versement');          
        $sumPaymentMonth = Paiement::where('annee_id',$annee_id)->where('mois','=',date('m'))->sum('versement'); 
        $payments_month = Paiement::where('annee_id',$annee_id)->where('mois','=',date('m'))->get(); 
        $paymentMonth = Paiement::where('annee_id',$annee_id)->groupby('mois')->get(); 
        /*
        $chart_payments_month = Charts::database($payments_month, 'bar', 'highcharts')
                  ->title(" ")//Paiements enregistrés mensuelles
                  ->elementLabel("Somme ")
                  ->dimensions(500, 250)
                  ->responsive(true)
                  ->groupByMonth();*/

        foreach ($paymentMonth as $key => $value) {
            $data['mois'][]=$value->mois;
            $data['versement'][]=$value->versement;
        }//dd($data);

        $chart_payments_month = Charts::create('line', 'highcharts')
                ->title(' ')
                ->elementLabel('La somme du versement par mois')
                ->labels($data['mois'])
                ->values($data['versement'])
                ->dimensions(1000,500)
                ->responsive(true);

        return view('dashboard.index',compact('nb_etudiants','professeurs','sumPaymentMonth','nb_classes','chart_payments_month')); 
    }

 
}
