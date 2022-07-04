@extends('back.master') 
@section('title','Payment')
@section('content')

@php
$mois =['01'=> 'Janvier','02'=> 'Février','03'=> 'Mars','04'=> 'Avril','05'=> 'Mai','06'=> 'Juin',
		'07'=> 'Juillet','08'=> 'Aout','09'=> 'Septembre','10'=>'Octobre','11'=> 'Janvier','12'=> 'Décembre'];     
                                      
@endphp
<div class="row">
	<div class="col-md-12">
	  <div class="card">

	    <div class="card-header card-header-info card-header-icon">
              <div class="card-icon">
                <i class="material-icons">assignment</i>
              </div>
		      <h3 class="card-title text-center">Payements</h3>
        </div>

		    <div class="card-body">

		    	<div class="row text-center"> 
  	      			<div class="col-sm-3">                   
                    <div class="form-group">
                      <p><label class="bmd-label-floating" style="color: red;">Tarif : </label> <b>{{ $infos['tarif'] }}</b></p>
                     </div>
                </div> 

                <div class="col-sm-3">                   
                    <div class="form-group">
                      <p><label class="bmd-label-floating" style="color: red;">Modalité : </label> <b>{{ $infos['modalité'] }}</b></p>
                     </div>
                </div>

                @if($infos['transport'] == "Oui")
                <div class="col-sm-3">                   
                    <div class="form-group">
                      <p><label class="bmd-label-floating" style="color: red;">Transport : </label> <b>{{ $infos['transport'] }}</b></p>
                     </div>
                </div> 
                @endif
                
                @if($infos['cantine'] == "Oui")
                 <div class="col-sm-3">                   
                    <div class="form-group">
                      <p><label class="bmd-label-floating" style="color: red;">Cantine : </label> <b>{{ $infos['cantine'] }}</b></p>
                     </div>
                </div> 
                @endif

                <div class="col-sm-3">                   
                    <div class="form-group">
                      <p><label class="bmd-label-floating" style="color: red;">Montant Payé : </label> <b>{{ $infos['classes']['titre'] }} {{ $sumPayment }}</b></p>
                     </div>
                </div> 

                <div class="col-sm-3">                   
                    <div class="form-group">
                      <p><label class="bmd-label-floating" style="color: red;">Classe : </label> <b>{{ $infos['categories']['titre'] }} => {{ $infos['categories']['niveau'] }}</b></p>
                     </div>
                </div>	              
			   	</div>	

		        <div class="table-responsive">
	                  <table class="table">
	                    <thead class=" text-primary">
			            <tr>
	 		              <th class="text-center" style="color: red">Date Versement</th> 
			              <th class="text-center" style="color: red">Mois</th>   			
			              <th class="text-center" style="color: red">Versement</th> 
		 	              <th class="text-center" style="color: red">Montant Payé</th>  	              
			              <th class="text-center" style="color: red">Mode Paiement</th>
			            </tr>
			          </thead> 
			          
			          <tbody>	 				
		 						@foreach($payments as $payment)
		 	            <tr>
			              <td class="text-center" ><b>{{ \Carbon\Carbon::parse($payment['created_at'])->format('d-m-Y')  }}</b></td> 
			              <td class="text-center" ><b>{{ $mois[$payment['mois']] }}</b></td> 
			              <td class="text-center" ><b>{{ $payment['versement'] }}</b></td> 	
 			              <td class="text-center" ><b>{{ $payment['description'] }}</b></td> 
			              <td class="text-center" ><b>{{ $payment['mode'] }}</b></td> 		              
			            </tr>          
           			@endforeach
			          </tbody>

			        </table>
			      </div>
			    <!-- end content-->

			     

			  </div>
	  <!--  end card  -->
  		</div>
	<!-- end col-md-12 -->
	</div>
	<!-- end col-md-12 -->
</div> 
 
@endsection	      