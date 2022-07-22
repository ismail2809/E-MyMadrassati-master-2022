@extends('backend.master')

@section('title','Nouvelle paiement | Classe')
@section('content')  

<h4 class="h4 mb-3">
<a href="{{url('/paiements/listes_classes')}}" title="Retour">
  <i class="align-middle me-2" data-feather="arrow-left-circle"></i>  
</a> 
     <strong>  Retour </strong>
</h4>        

<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header" style="background-color:#207CF3;"> 
          <h5 class="card-title mb-0" style="color: white;"><strong> Nouvelle paiement </strong>| Classe </h5>
        </div>
        <div class="card-body">
			 
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
                
                <div class="col-sm-3">
                  <p class="text-muted">Classe : </p>
                </div>

                <div class="col-sm-3">
                     <strong> {{ $classe->titre }}</strong>
                </div> 

                <div class="col-sm-3">
                  <p class="text-muted">Année scolaire : </p>
                </div>

                <div class="col-sm-3"> 
                   <strong> {{ $année->titre }}</strong>
                </div>

          </div>
          <hr>

        	<div class="row">
      	    <div class="col-lg-12">

			          <table id="nopagination" class="table table-striped table-bordered nowrap" style="width:100%">
			              <thead> 
					             <tr>
                        <th><b>ID</b></th>    
                        <th><b>Matricule</b></th>    
			 		              <th><b>Nom complet</b></th>    
                        <th style="text-align: center;"><b>Paiement</b></th>  
			 		              <th style="text-align: center;"><b>Historique</b></th>  
					             </tr> 
					          </thead> 
					          <tbody> 
					            @foreach($allClasses as $classe)
					            <tr>
					             <td>{{ $classe->id }}  
					             </td> 
                       <td>{{ $classe->num_inscription}}     
                       </td>   
                       <td>{{ $classe->etudiants->users->prenom }} {{ $classe->etudiants->users->nom }}
                       </td>      
                       <td style="text-align: center;">
                          <a href="{{url('/etudiant/'.$classe->etudiants->id.'/nouvelle_paiement')}}" title="paiement">
                              <i class="align-middle me-2" data-feather="dollar-sign"></i> 
                          </a> 
                       </td>
                       <td style="text-align: center;">
                          <a href="{{url('/paiement/'.$classe->etudiants->id.'/historique')}}" title="historique">
                              <i class="align-middle me-2" data-feather="folder-minus"></i> 
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
  
@endsection