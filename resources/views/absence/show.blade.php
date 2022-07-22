@extends('backend.master')

@section('title','Détail absence')
@section('content')  

<h4 class="h4 mb-3">
<a href="{{url('/liste_absences')}}" title="Retour">
  <i class="align-middle me-2" data-feather="arrow-left-circle"></i>  
</a> 
     <strong>  Retour </strong>
</h4>        

<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header" style="background-color:#207CF3;"> 
          <h5 class="card-title mb-0" style="color: white;"><strong> Détail absence </strong> </h5>  
        </div>
        <div class="card-body">
			 	  <div class="row"> 

                <div class="col-sm-3">
                  <p class="text-muted">Catégorie : </p>
                </div>

                <div class="col-sm-3">
                     <strong> {{ $absence->classes->categories->titre }} </strong> 
                </div>

                <div class="col-sm-3">
                  <p class="text-muted">Année scolaire : </p>
                </div>

                <div class="col-sm-3">
                     <strong> {{ $absence->années->titre }}</strong>
                </div>
  
                <div class="col-sm-3">
                  <p class="text-muted">Niveau : </p>
                </div>

                <div class="col-sm-3">
                     <strong> {{ $absence->classes->niveaus->titre }}</strong>
                </div>
         
                <div class="col-sm-3">
                  <p class="text-muted">Semestre : </p>
                </div>

                <div class="col-sm-3">
                     <strong> {{ $absence->semestre }} </strong>
                </div>

         </div>

         <div class="row">

                <div class="col-sm-3">
                  <p class="text-muted">Classe : </p>
                </div>

                <div class="col-sm-3">
                     <strong> {{ $absence->classes->titre }}</strong>
                </div>

                <div class="col-sm-3">
                  <p class="text-muted">Matière : </p>
                </div>

                <div class="col-sm-3">
                     <strong> {{ $absence->matieres->titre }}</strong>
                </div>

                <div class="col-sm-3">
                  <p class="text-muted">Etudiant : </p>
                </div>

                <div class="col-sm-3">
                     <strong>{{ $absence->etudiants->users->prenom }} {{ $absence->etudiants->users->nom }}</strong>
                </div>
         
                <div class="col-sm-3">
                  <p class="text-muted">Professeur : </p>
                </div>

                <div class="col-sm-3">
                     <strong> {{ $absence->professeurs->users->prenom }} {{ $absence->professeurs->users->nom }}</strong>
                </div>
         
                <div class="col-sm-3">
                  <p class="text-muted">Date : </p>
                </div>

                <div class="col-sm-3">
                     <strong> {{ $absence->date }} </strong>
                </div>
					</div> 
         <hr>
          <div class="row">
          	<table id="nosearching" class="table table-striped table-bordered nowrap" style="width:100%">
									<thead>
										<tr>
                      <th style="text-align: center;">ID</th>
                      <th style="text-align: center;">Date debut</th>
                      <th style="text-align: center;">Date fin</th>
                      <th style="text-align: center;">Absence/Retard</th> 
                      <th style="text-align: center;">Justif</th> 
                      <th style="text-align: center;">Observation</th>  
                      <th style="text-align: center;">Modifier</th>
											<th style="text-align: center;">Supprimer</th>
										</tr>
									</thead>
									<tbody>
										<tr>
                      <td style="text-align: center;">{{ $absence->id }}</td>                   
 											<td style="text-align: center;">{{ $absence->debutseance }}</td>
											<td style="text-align: center;">{{ $absence->finseance }}</td>
											<td style="text-align: center;">
											 @if($absence->absence == "retard")
												<span class="badge bg-warning"> {{ $absence->absence }}</span>
                       @endif                       
                       @if($absence->absence == "absence")
												<span class="badge bg-danger"> {{ $absence->absence }}</span>											 
											 @endif
											</td> 
                      <td style="text-align: center;">{{ $absence->justification }} </td>
                      <td style="text-align: center;">{{ $absence->observation }} </td>
											<td style="text-align: center;">
                        <a href="{{url('/absence/'.$absence->id.'/edit')}}" title="Modifier">
                          <i class="align-middle me-2" data-feather="edit"></i> 
                        </a> 
                     </td>                      
                      <td style="text-align: center;">
                         <form action="{{url('/absence/'.$absence->id)}}" method="post">
                            {{csrf_field()}}
                            {{method_field('DELETE')}}
                            <button type="submit"  class="btn btn-danger btn-sm" title="Suprimer">
                            <i class="align-middle" data-feather="trash-2"></i> 
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