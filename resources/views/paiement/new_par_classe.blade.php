@extends('backend.master')

@section('title','Nouvelle absence')
@section('content')  

<h4 class="h4 mb-3">
<a href="{{url('/classes_listes')}}" title="Retour">
  <i class="align-middle me-2" data-feather="arrow-left-circle"></i>  
</a> 
     <strong>  Retour </strong>
</h4>        

<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header" style="background-color:#207CF3;"> 
          <h5 class="card-title mb-0" style="color: white;"><strong> Nouvelle absence </strong> </h5>
        </div>
        <div class="card-body">
			
			 <form method="post" action="{{url('/paiement')}}" enctype="multipart/form-data" >
        {{ csrf_field() }}  
        <input type="hidden" name="classe_id" value="{{$id_classe}}">
        	
        	<div class="row">

        				<div class="col-sm-3">
                  <p class="text-muted">Catégorie : </p>
                </div>

                <div class="col-sm-3">
                     <strong> {{ $classe->categories->titre }} </strong> 
                </div>

                <div class="col-sm-3">
                  <p class="text-muted">Niveau : </p>
                </div>

                <div class="col-sm-3">
                     <strong> {{ $classe->niveaus->titre }}</strong>
                </div> 

                <div class="col-sm-2">
                  <p class="text-muted">Année scolaire : </p>
                </div>

                <div class="col-sm-4">
                     <select class="form-select mb-3" name="annee_id" title="Année Scholaire" required> 
                          <option selected  disabled="true">Choisir : </option>                      
                      @foreach($années as $année)
                          <option value="{{ $année->id }}"> {{ $année->titre}} </option> 
                      @endforeach
                      </select>
                </div>
          			
          			<div class="col-sm-3">
                  <p class="text-muted">Classe : </p>
                </div>

                <div class="col-sm-3">
                     <strong> {{ $classe->titre }}</strong>
                </div> 

          </div>
          <hr>

        	<div class="row">
      	    <div class="col-lg-12">

			          <table id="nosearching" class="table table-striped table-bordered nowrap" style="width:100%">
			              <thead> 
					             <tr>
			 		              <th style="text-align: center;"><b>Nom complet</b></th>  
					              <th style="text-align: center;"><b>Type Tarif</b></th> 
					              <th style="text-align: center;"><b>Versement</b></th> 
                        <th style="text-align: center;"><b>Mois</b></th> 
					              <th style="text-align: center;"><b>Mode</b></th> 
			 		              <th style="text-align: center;"><b>Description</b></th>  
					             </tr> 
					          </thead> 
					          <tbody> 
					            @foreach($allClasses as $classe)
					            <tr>
					             <td style="text-align: center;">{{ $classe->etudiants->users->prenom }} {{ $classe->etudiants->users->titre }}
			        						<input type="hidden" name="etudiant_id[{{$classe->etudiants->id}}]" value="{{$classe->etudiants->id}}">   	
					             </td>  
					             <td style="text-align: center;">
			                      <select class="form-select mb-3" name="type_paiement_id[{{ $classe->etudiants->id}}]" title="Type" > 
                                <option selected  disabled="true">Choisir : </option> 
                            @foreach($type_paiements as $type_paiement)
                                <option value="{{ $type_paiement->id }}"> {{ $type_paiement->titre}} => {{ $type_paiement->montant}} </option> 
                            @endforeach      
                            </select>
					             </td>  
					             <td style="text-align: center;">
			                      <input type="number" class="form-control mb-3" placeholder="Versement" name="versement[{{ $classe->etudiants->id}}]" >
					             </td>  
					             <td style="text-align: center;">
						             	<select class="form-select mb-3" name="mois[{{ $classe->etudiants->id}}]" title="Mois" > 
                              <option selected  disabled="true">Choisir : </option>                      
                              <option value="01"> Janvier </option>  
                              <option value="02"> Février </option>  
                              <option value="03"> Mars </option>  
                              <option value="04"> Avril </option>  
                              <option value="05"> Mai </option>  
                              <option value="06"> Juin </option>  
                              <option value="07"> Juillet</option>  
                              <option value="08"> Aout </option>  
                              <option value="09"> Septembre </option>  
                              <option value="10"> Octobre </option>  
                              <option value="11"> Novembre </option>  
                              <option value="12"> Décembre </option> 
                          </select>
			 		             </td> 
			 		             <td style="text-align: center;">
						             	<select class="form-select mb-3" name="mode[{{ $classe->etudiants->id}}]" title="Mode" > 
                              <option selected  disabled="true">Choisir : </option>                      
                              <option value="liquide">Liquide</option>
                              <option value="cheque">Chèque</option> 
                              <option value="cb">Carte bancaire</option> 
                          </select>
			 		             </td> 
					             <td style="text-align: center;">                      
					             	<textarea class="form-control" rows="3" name="observation[{{ $classe->etudiants->id}}]"></textarea>
											</td>  	              
					                 
					            </tr>       
					            @endforeach       
					        	</tbody>
			          </table>
          
          	</div>
          </div>
        	
        	<div class="row">
	          <div class="col-lg-12">
			          <input type="submit" class="btn btn-info" value="Valider">
	          </div>
          </div>
       	
       	</form>

        </div>
      </div>
    </div>
</div>
  
@endsection