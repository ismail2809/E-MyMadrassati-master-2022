@extends('back.master')

@section('title','Détail Inscription')
@section('content') 

<div class="row">
	@if ($message = Session::get('info'))
	<div class="alert alert-info col-12 text-center">
	    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	      <i class="material-icons">close</i>
	    </button>
	    <span><b> {{ $message }} </b></span>
	</div>
	@endif
	@if ($message = Session::get('success'))
	<div class="alert alert-success col-12 text-center">
	    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	      <i class="material-icons">close</i>
	    </button>
	    <span><b> {{ $message }} </b></span>
	</div>
	@endif
	@if ($message = Session::get('error'))
	<div class="alert alert-danger col-12 text-center">
	    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	      <i class="material-icons">close</i>
	    </button>
	    <span><b> {{ $message }} </b></span>
	</div>
	@endif
	@if ($message = Session::get('warning'))
	<div class="alert alert-warning col-12 text-center">
	    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	      <i class="material-icons">close</i>
	    </button>
	    <span><b> {{ $message }} </b></span>
	</div>
	@endif 
</div> 

<div class="mr-auto ml-auto">
    <!--      Wizard container        -->
    <div class="wizard-container">
      
        <div class="card card-wizard" data-color="blue" id="wizardProfile">
 
            <div class="card-header text-center">           
              	<h3 class="card-title">Dossier Etudiant</h3> 			
 			</div>
       
            <div class="wizard-navigation">
              <ul class="nav nav-pills">
                <li class="nav-item">
                  <a class="nav-link active" href="#infos" data-toggle="tab" role="tab">
                    Info Etudiant
                  </a>
                </li>                
                <li class="nav-item">
                  <a class="nav-link" href="#inscriptions" data-toggle="tab" role="tab">
                    Inscriptions
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#payments" data-toggle="tab" role="tab">
                    Payments
                  </a>
                </li> 
              </ul>
            </div>
            
            <div class="card-body">

              <div class="tab-content">
              
	                <div class="tab-pane active" id="infos">            

	                    <h5 class="info-text"> Les informations personnelles</h5>                 

	                    <div class="row">
		                    <div class="col-sm-6">                   
		                        <div class="form-group">
		                          <p><label class="bmd-label-floating">Nom Complet : </label> <b>{{ $detail['user']['prenom'] }} {{ $detail['user']['nom'] }}</b></p>
		                         </div>
		                    </div>
		                    <div class="col-sm-6">                   
		                        <div class="form-group">
		                          <p><label class="bmd-label-floating">Date création  : </label> <b>{{ date('Y-m-d H:m', strtotime($detail['inscription']['created_at'])) }}</b></p>
		                         </div>
		                    </div>
		                </div>

		                <div class="row">
		                    <div class="col-sm-6">                   
		                        <div class="form-group">
		                          <p><label class="bmd-label-floating">Num inscription : </label> <b> num </b></p>
		                         </div>
		                    </div>
		                    <div class="col-sm-6">                   
		                        <div class="form-group">
		                          <p><label class="bmd-label-floating">Email : </label> <b>{{ $detail['user']['email'] }}</b></p>
		                         </div>
		                    </div>
		                </div>

		                <div class="row">
		                    <div class="col-sm-6">                   
		                        <div class="form-group">
		                          <p><label class="bmd-label-floating">Phone : </label> <b>{{ $detail['user']['tel'] }}</b></p>
		                         </div>
		                    </div>
		                    <div class="col-sm-6">                   
		                        <div class="form-group">
		                          <p><label class="bmd-label-floating">Sexe : </label> <b>{{ $detail['user']['sexe'] }}</b></p>
		                         </div>
		                    </div>
		                </div>

		                <div class="row">
		                    <div class="col-sm-6">                   
		                        <div class="form-group">
		                          <p><label class="bmd-label-floating">Date naissance : </label> <b>{{ $detail['user']['ddn'] }}</b></p>
		                         </div>
		                    </div>
		                    <div class="col-sm-6">                   
		                        <div class="form-group">
		                          <p><label class="bmd-label-floating">Lieu naissance : </label> <b>{{ $detail['user']['lieu_naissance'] }}</b></p>
		                         </div>
		                    </div>
		                </div>

		                <div class="row">
		                    <div class="col-sm-12">                   
		                        <div class="form-group">
		                          <p><label class="bmd-label-floating">Adresse : </label> <b>{{ $detail['user']['adresse'] }}</b></p>
		                         </div>
		                    </div> 
		                </div>

		                <hr>
						
	                    <h5 class="info-text"> Les informations du Tutteur </h5>

		                <div class="row">
		                    <div class="col-sm-6">                   
		                        <div class="form-group">
		                          <p><label class="bmd-label-floating">Nom complet : </label> <b>{{ $detail['user']['ddn'] }}</b></p>
		                         </div>
		                    </div>
		                    <div class="col-sm-6">                   
		                        <div class="form-group">
		                          <p><label class="bmd-label-floating">Sexe : </label> <b>{{ $detail['user']['lieu_naissance'] }}</b></p>
		                         </div>
		                    </div>
		                </div>

		                <div class="row">
		                    <div class="col-sm-6">                   
		                        <div class="form-group">
		                          <p><label class="bmd-label-floating">Email : </label> <b>{{ $detail['user']['ddn'] }}</b></p>
		                         </div>
		                    </div>
		                    <div class="col-sm-6">                   
		                        <div class="form-group">
		                          <p><label class="bmd-label-floating">Phone : </label> <b>{{ $detail['user']['lieu_naissance'] }}</b></p>
		                         </div>
		                    </div>
		                </div>

		                <div class="row">
		                    <div class="col-sm-6">                   
		                        <div class="form-group">
		                          <p><label class="bmd-label-floating">Profession : </label> <b>{{ $detail['user']['ddn'] }}</b></p>
		                         </div>
		                    </div> 
		                </div>
	 
	                </div>
	 
	                <div class="tab-pane" id="inscriptions">

		                <h5 class="info-text"> Inscription </h5>

		                <div class="row justify-content-center"> 

			                    <div class="col-sm-3">                   
			                        <div class="form-group">
			                          <p><label class="bmd-label-floating">Catégorie : </label> <b>{{ $detail['categorie']['titre'] }}</b></p>
			                         </div>
			                    </div> 

			                    <div class="col-sm-3">                   
			                        <div class="form-group">
			                          <p><label class="bmd-label-floating">Niveau : </label> <b>{{ $detail['categorie']['niveau'] }}</b></p>
			                         </div>
			                    </div> 

			                    <div class="col-sm-3">                   
			                        <div class="form-group">
			                          <p><label class="bmd-label-floating">Classe : </label> <b>{{ $detail['classe']['titre'] }}</b></p>
			                         </div>
			                    </div> 

			                    <div class="col-sm-3">                   
			                        <div class="form-group">
			                          <p><label class="bmd-label-floating">Année scolarité : </label> <b>{{ $detail['annee']['titre'] }}</b></p>
			                         </div>
			                    </div> 

			                    <div class="col-sm-3">                   
			                        <div class="form-group">
			                          <p><label class="bmd-label-floating">Modalité : </label> <b>{{ $detail['inscription']['modalité'] }}</b></p>
			                         </div>
			                    </div> 

			                    <div class="col-sm-3">                   
			                        <div class="form-group">
			                          <p><label class="bmd-label-floating">Tarif : </label> <b>{{ $detail['inscription']['tarif'] }}</b></p>
			                         </div>
			                    </div> 

			                    <div class="col-sm-3">                   
			                        <div class="form-group">
			                          <p><label class="bmd-label-floating">Transport : </label> <b>{{ $detail['inscription']['transport'] }}</b></p>
			                         </div>
			                    </div> 

			                    <div class="col-sm-3">                   
			                        <div class="form-group">
			                          <p><label class="bmd-label-floating">Cantine : </label> <b>{{ $detail['inscription']['cantine'] }}</b></p>
			                         </div>
			                    </div>  

			            </div>

					</div>
	 
		            <div class="tab-pane" id="payments">                
		                
		                <div class="row justify-content-center"> 

		                    <div class="col-sm-3">                   
		                        <div class="form-group">
		                          <p><label class="bmd-label-floating">Numéro inscription : </label> <b>{{ $detail['inscription']['num_inscription'] }}</b></p>
		                         </div>
		                    </div>  
		                    <div class="col-sm-3">                   
		                        <div class="form-group">
		                          <p><label class="bmd-label-floating">Tarif : </label> <b>{{ $detail['inscription']['tarif'] }}</b></p>
		                         </div>
		                    </div> 

		                    <div class="col-sm-3">                   
		                        <div class="form-group">
		                          <p><label class="bmd-label-floating">Reste : </label> <b>{{ $detail['inscription']['tarif'] - $detail['sum_payement'] }}</b></p>
		                         </div>
		                    </div>
		                    <div class="col-sm-3">                   
		                        <div class="form-group">
		                          <p><label class="bmd-label-floating">Année scolarité : </label> <b>{{ $detail['annee']['titre'] }}</b></p>
		                         </div>
		                    </div> 

						</div>	

						<hr>

						<div class="row justify-content-center"> 

							<div class="col-lg-12"> 
			                   
				                <div class="material-datatables">
					                    
				                    <table  id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">

							          <thead>
							            <tr>
				 			              <th style="text-align: center;"><b>Prénom Nom</b></th> 
				 			              <th style="text-align: center;"><b>Mode</b></th>  
				 			              <th style="text-align: center;"><b>Versement</b></th>  
				 			              <th style="text-align: center;"><b>Mois</b></th>  
							              <th style="text-align: center;"><b>Description</b></th>  
							              <th style="text-align: center;"><b>Date</b></th>   			
							              <th class="disabled-sorting text-center"></th> 
							            </tr>
							          </thead>

							          <tbody>
							          	@foreach($detail['historiquePayements'] as $historique)
							            <tr>
				 			              <td style="text-align: center;">{{ $detail['user']['prenom'] }} {{ $detail['user']['nom'] }}</td> 
							              <td style="text-align: center;">{{ $historique['mode'] }}</td>
							              <td style="text-align: center;">{{ $historique['versement'] }}</td>
							              <td style="text-align: center;">{{ $historique['mois'] }}</td>
							              <td style="text-align: center;">{{ $historique['description'] }}</td>
							              <td style="text-align: center;">{{ $historique['created_at'] }}</td>  
						                  <td>
						                  	<a href="{{url('/payment/'.$historique['id'].'/edit')}}" type="button" class="btn btn-warning btn-round" title="Modifier">
						                  	<i class="material-icons">edit</i> 
						                  	</a> 
						                  </td> 
							            </tr>  
							            @endforeach	            
							          </tbody>

							        </table>
								        
								</div>

							</div>

						</div>

		            </div>           
	              
	            </div>

              </div>

        </div>
             
    </div>

</div>
<!-- wizard container -->

@endsection