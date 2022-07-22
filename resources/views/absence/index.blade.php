@extends('backend.master')

@section('title','Liste des absences')
@section('content') 
   
<h4 class="h4 mb-3">
 <a href="{{url('/classes/liste')}}" title="Retour">
<i class="align-middle me-2" data-feather="plus-circle"></i>  Nouvelle
</a> 
</h4>

<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header" style="background-color:#207CF3;">
          <h5 class="card-title mb-0" style="color: white;"><strong>Liste des absences </strong></h5>
        </div>
        <div class="card-body">

          <table id="example" class="table table-striped" style="width:100%">
                <thead> 
		            <tr>
		              <th style="text-align: center;color: red"><b>ID</b></th>  
		              <th style="text-align: center;color: red"><b>Classe </b></th> 
		              <th style="text-align: center;color: red"><b>Niveau </b></th> 
		              <th style="text-align: center;color: red"><b>Catégorie </b></th>
		              <th style="text-align: center;color: red"><b>Etudiant</b></th>  
		              <th style="text-align: center;color: red"><b>Matiere </b></th> 
		              <th style="text-align: center;color: red"><b>Absence/Retard </b></th>
		              <th style="text-align: center;color: red"><b>Année scolaire</b></th> 
		              <th style="text-align: center;color: red"><b>Détail</b></th> 
		              <th style="text-align: center;color: red"><b>Modifier</b></th> 
		            </tr> 
		          </thead> 
		          <tbody> 
		            @foreach($absences as $absence)
		            <tr>
		             <td style="text-align: center;">{{ $absence->id }}</td> 	 	              	          
		             <td style="text-align: center;">{{ $absence->classes->titre }}</td>     	              
		             <td style="text-align: center;">{{ $absence->classes->niveaus->titre }}</td>
		             <td style="text-align: center;">{{ $absence->classes->categories->titre }}</td>                	              
		             <td style="text-align: center;">{{ $absence->etudiants->users->prenom }} {{ $absence->etudiants->users->nom }}</td> 	       
		             <td style="text-align: center;">{{ $absence->matieres->titre }} </td> 	   
		             <td style="text-align: center;">
		             	@if($absence->absence == "retard")
										<span class="badge bg-warning"> {{ $absence->absence }}</span>
                  @endif                       
                  @if($absence->absence == "absence")
										<span class="badge bg-danger"> {{ $absence->absence }}</span>											 
								 @endif              
								</td>                   	
		             <td style="text-align: center;">{{ $absence->années->titre }}</td>                   	              

		             <td style="text-align: center;">
		               	<a href="{{url('/absence/'.$absence->id.'/détail')}}" title="Détail">
		               		<i class="align-middle me-2" data-feather="eye"></i> 
	                  	</a> 
	                 </td>  
	                 <td style="text-align: center;">
		               	<a href="{{url('/absence/'.$absence->id.'/edit')}}" title="Modifier">
		               		<i class="align-middle me-2" data-feather="edit"></i> 
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
  
@endsection