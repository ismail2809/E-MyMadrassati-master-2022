@extends('backend.master')

@section('title','Détail note')
@section('content')  

<h4 class="h4 mb-3">
<a href="{{url('/liste_notes')}}" title="Retour">
  <i class="align-middle me-2" data-feather="arrow-left-circle"></i>  
</a> 
     <strong>  Retour </strong>
</h4>        

<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header" style="background-color:#207CF3;"> 
          <h5 class="card-title mb-0" style="color: white;"><strong> Détail note </strong> </h5>  
        </div>
        <div class="card-body">
			 	   <div class="row"> 

                <div class="col-sm-3">
                  <p class="text-muted">Catégorie : </p>
                </div>

                <div class="col-sm-3">
                     <strong> {{ $note->classes->categories->titre }} </strong> 
                </div>

                <div class="col-sm-3">
                  <p class="text-muted">Année scolaire : </p>
                </div>

                <div class="col-sm-3">
                     <strong> {{ $note->années->titre }}</strong>
                </div>
  
                <div class="col-sm-3">
                  <p class="text-muted">Niveau : </p>
                </div>

                <div class="col-sm-3">
                     <strong> {{ $note->classes->niveaus->titre }}</strong>
                </div>
         
                <div class="col-sm-3">
                  <p class="text-muted">Semestre : </p>
                </div>

                <div class="col-sm-3">
                     <strong> {{ $note->semestre }} </strong>
                </div>

         </div>

         <div class="row">

                <div class="col-sm-3">
                  <p class="text-muted">Classe : </p>
                </div>

                <div class="col-sm-3">
                     <strong> {{ $note->classes->titre }}</strong>
                </div>

                <div class="col-sm-3">
                  <p class="text-muted">Matière : </p>
                </div>

                <div class="col-sm-3">
                     <strong> {{ $note->matieres->titre }}</strong>
                </div>

                <div class="col-sm-3">
                  <p class="text-muted">Etudiant : </p>
                </div>

                <div class="col-sm-3">
                     <strong>{{ $note->etudiants->users->prenom }} {{ $note->etudiants->users->nom }}</strong>
                </div>
         
                <div class="col-sm-3">
                  <p class="text-muted">Professeur : </p>
                </div>

                <div class="col-sm-3">
                     <strong> {{ $note->professeurs->users->prenom }} {{ $note->professeurs->users->nom }}</strong>
                </div>
         
                <div class="col-sm-3">
                  <p class="text-muted">Date : </p>
                </div>

                <div class="col-sm-3">
                     <strong> {{ $note->date }} </strong>
                </div>
          </div> 
         <hr>
          <div class="row">
          	<table id="nosearching" class="table table-striped table-bordered nowrap" style="width:100%">
									<thead>
										<tr>
                      <th>ID</th>   
                      <th>Note</th>
											<th>Coefficient</th>
                      <th>Observation</th>
                      <th>Modifier</th>
											<th>Supprimer</th>
										</tr>
									</thead>
									<tbody>
										<tr>
                      <td>{{ $note->id }}</td>         
                      <td>{{ $note->note }} </td> 
											<td>{{ $note->coefficient }}</td>
                      <td>{{ $note->observation }} </td>
											<td>
                        <a href="{{url('/note/'.$note->id.'/edit')}}" title="Modifier">
                          <i class="align-middle me-2" data-feather="edit"></i> 
                        </a> 
                     </td>                      
                      <td>
                         <form action="{{url('/note/'.$note->id)}}" method="post">
                            {{csrf_field()}}
                            {{method_field('DELETE')}}
                            <button type="submit"  class="btn btn-danger" title="Suprimer">
                            <i class="align-middle" data-feather="delete"></i>  
                         </form>  
                     </td> 
										</tr>
									</tbody>
						</table>
 
					</div> 

	      </div>
 
      </div>
    </div>
</div>
  
@endsection