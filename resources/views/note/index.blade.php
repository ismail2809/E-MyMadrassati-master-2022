@extends('backend.master')

@section('title','Liste des notes')
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
          <h5 class="card-title mb-0" style="color: white;"><strong>Liste des notes </strong></h5>
        </div>
        <div class="card-body">

          <table id="example" class="table table-striped table-bordered nowrap display" style="width:100%">
                <thead> 
		            <tr>
		              <th style="text-align: center;"><b>ID</b></th>  
		              <th style="text-align: center;"><b>Classe </b></th> 
		              <th style="text-align: center;"><b>Niveau </b></th> 
		              <th style="text-align: center;"><b>Catégorie </b></th>
		              <th style="text-align: center;"><b>Etudiant</b></th>  
		              <th style="text-align: center;"><b>Matiere </b></th>   
		              <th style="text-align: center;"><b>Année scolaire</b></th> 
		              <th style="text-align: center;"><b>Détail</b></th>  
		              <th style="text-align: center;"><b>Modifier</b></th>  
		            </tr> 
		          </thead> 
		          <tbody> 
		            @foreach($notes as $note)
		            <tr>
		             <td style="text-align: center;">{{ $note->id }}</td> 	 	              	          
		             <td style="text-align: center;">{{ $note->classes->titre }}</td>     	              
		             <td style="text-align: center;">{{ $note->classes->niveaus->titre }}</td>
		             <td style="text-align: center;">{{ $note->classes->categories->titre }}</td>    
		             <td style="text-align: center;">{{ $note->etudiants->users->prenom }} {{ $note->etudiants->users->nom }}</td> 	        
		             <td style="text-align: center;">{{ $note->matieres->titre }} </td>                   	 
		             <td style="text-align: center;">{{ $note->années->titre }}</td>   
		             <td style="text-align: center;">
		               	<a href="{{url('/note/'.$note->id.'/détail')}}" title="Détail">
		               		<i class="align-middle me-2" data-feather="eye"></i> 
	                  	</a> 
	                </td>  
	                <td style="text-align: center;">
		               	<a href="{{url('/note/'.$note->id.'/edit')}}" title="Modifier">
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