<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Etudiant;
use App\Professeur;
use App\Payment;
use App\Inscription;
use DB;
use Charts;
use Session;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $année = Session::get('année');
        //dd($année);
        $professeurs = Professeur::count();
        $payment= Payment::where('annee_id',$année)->sum('versement'); 
  
        $etudiants = Inscription::select('etudiant_id')->where('annee_id',$année)->get();
        $nb_etudiants = $etudiants->count();

   
        $users = Inscription::where(DB::raw("(DATE_FORMAT(created_at,'%Y'))"),date('Y'))->get();

        $sumPayment = Payment::where('annee_id',$année)->sum('versement'); 
        
        $sumPaymentDay = Payment::where('annee_id',$année)->whereDay('created_at','=',date('d'))->where('mois','=',date('m'))->sum('versement'); 
        
        $sumPaymentMonth = Payment::where('annee_id',$année)->where('mois','=',date('m'))->sum('versement'); 
        
        $payments_month = Payment::where('annee_id','=',$année)->where('mois','=',date('m'))->get();

        $payments = Payment::with('etudiants.users','inscriptions','années')->orderby('id','desc')->get();

       /* $payments = Payment::where('annee_id','=',$année)->where(DB::raw("(DATE_FORMAT(created_at,'%Y'))"),date('Y'))->get();
        $payments_month = Payment::where('annee_id','=',$année)->where(DB::raw("(DATE_FORMAT(created_at,'%m'))"),date('m'))->get();
        $payments_day = Payment::where('annee_id','=',$année)->where(DB::raw("(DATE_FORMAT(created_at,'%d'))"),date('d'))->get();

        $payment_year = Payment::where('annee_id','=',$année)->where(DB::raw("(DATE_FORMAT(created_at,'%Y'))"),date('Y'))->sum('versement');
        $payment_month = Payment::where('annee_id','=',$année)->where(DB::raw("(DATE_FORMAT(created_at,'%m'))"),date('m'))->sum('versement');
        $payment_day = Payment::where('annee_id','=',$année)->where(DB::raw("(DATE_FORMAT(created_at,'%d'))"),date('d'))->sum('versement');
        $somme_payment = [];
        $somme_payment['payment_year'] = $payment_year;
        $somme_payment['payment_month'] = $payment_month;
        $somme_payment['payment_day'] = $payment_day;
        //dd($somme_payment); 
        //dd($payments_month,$payments_day);*/
        $chart_users = Charts::database($users, 'bar', 'highcharts')
                  ->title("Inscriptions enregistrés mensuels")
                  ->elementLabel("Total inscri^ptions etudiants")
                  ->dimensions(1000, 500)
                  ->responsive(true)
                  ->groupByMonth(date('Y'), true);
        
        $chart_payments_month = Charts::database($payments_month, 'bar', 'highcharts')
                  ->title("Payments enregistrés mensuels")
                  ->elementLabel("Total Payment")
                  ->dimensions(500, 250)
                  ->responsive(true)
                  ->groupByMonth();

       /* $chart_payments = Charts::database($payments, 'bar', 'highcharts')
                  ->title("Payments enregistrés annuele")
                  ->elementLabel("Total Payment")
                  ->dimensions(1000, 500)
                  ->responsive(true)
                  ->groupByYear();
        
        $chart_payments_month = Charts::database($payments_month, 'bar', 'highcharts')
                  ->title("Payments enregistrés mensuels")
                  ->elementLabel("Total Payment")
                  ->dimensions(500, 250)
                  ->responsive(true)
                  ->groupByMonth();
        
        $chart_payments_day = Charts::database($payments_day, 'bar', 'highcharts')
                  ->title("Payments enregistrés hebdomadaire")
                  ->elementLabel("Total Payment")
                  ->dimensions(500, 250)
                  ->responsive(true)
                  ->groupByDay();
        
        $sum_payment = json_decode(Payment::where('annee_id','=',$année)->get(),true);
        //$sum_payment = json_decode(Payment::where('annee_id','=',$année)->sum('versement'),true);
        //dd($sum_payment);  
        if(!empty($sum_payment)){            
            foreach ($sum_payment as $key => $value) {
              $t[$key]= $value['versement'];
            }
            $pie  =  Charts::create('pie', 'highcharts')
                    ->title('somme payment')
                    ->labels(array_keys($t))
                    ->values($t)
                    ->dimensions(1000,500)
                    ->responsive(true); 
        }
        //dd($t);    
 
        foreach ($somme_payment as $key => $value) {
          $somme[$key]= $value;
        }
         // dd($somme);
        $pie_somme_payment  =  Charts::create('pie', 'highcharts')
                ->title('somme payment')
                ->labels(array_keys($somme))
                ->values($somme)
                ->dimensions(250,250)
                ->responsive(true);   */                  

        return view('dashboard.dashboard',compact('chart_users','nb_etudiants','payment','professeurs','sumPayment','sumPaymentDay','sumPaymentMonth','chart_payments_month','payments'));

         /*return view('dashboard.dashboard',compact('chart_users','nb_etudiants','payment','professeurs','pie','chart_payments','chart_payments_month','chart_payments_day','somme_payment','pie_somme_payment'));*/
    }

 
}
