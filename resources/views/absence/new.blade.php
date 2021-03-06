@extends('backend.master')

@section('title','Nouvelle absence')
@section('content')  

<h4 class="h4 mb-3">
<a href="{{url('/classes/liste')}}" title="Retour">
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
			
			 <form method="post" action="{{url('/store_absence')}}" enctype="multipart/form-data" >
        {{ csrf_field() }} 
        <input type="hidden" name="professeur_id" value="{{Auth::user()['id']}}">
        <input type="hidden" name="classe_id" value="{{$id_classe}}">
        	
        	<div class="row">

        				<div class="col-sm-3">
                  <p class="text-muted">Catégorie : </p>
                </div>

                <div class="col-sm-3">
                     <strong> {{ $classe->categories->titre }} </strong> 
                </div>
  
                <div class="col-sm-3">
                  <p class="text-muted">Année scolaire : </p>
                </div>

                <div class="col-sm-3">
                     <strong> {{ $année->titre }}</strong>
                </div>

                <div class="col-sm-3">
                  <p class="text-muted">Niveau : </p>
                </div>

                <div class="col-sm-3">
                     <strong> {{ $classe->niveaus->titre }}</strong>
                </div>

                <div class="col-sm-2">
                  <p class="text-muted"> Semestre : </p>
                </div>

                <div class="col-sm-4"> 
		             	<select class="form-select" name="semestre" >
                        <option value="" selected disabled="true">Choisir : </option>
                        <option value="semestre1"> Semestre 1</option> 
                        <option value="semestre2"> Semestre 2</option> 
                        <option value="semestre3"> Semestre 3</option> 
                  </select>
                </div>
          			
          			<div class="col-sm-3">
                  <p class="text-muted">Classe : </p>
                </div>

                <div class="col-sm-3">
                     <strong> {{ $classe->titre }}</strong>
                </div>

                <div class="col-sm-2">
                  <p class="text-muted">Matière : </p>
                </div>

                <div class="col-sm-4">
                     <select class="form-select mb-3" name="matiere_id" required>
	                        <option selected  disabled="true">Choisir : </option>
	                    @foreach($matieres as $matiere)
                          <option value="{{ $matiere->id }}"> {{ $matiere->titre}} </option> 
                      @endforeach
	                  </select>
                </div>

                @if(Auth::user()['role'] == "admin" || Auth::user()['role'] == "agent")
                <div class="col-sm-2">
                  <p class="text-muted"><b> professeurs : </b></p>
                </div>

                <div class="col-sm-4"> 
		             	<select class="form-select" name="professeur_id" >
                        <option value="" selected disabled="true">Choisir : </option>
                        @foreach($professeurs as $professeur)
                        <option value="{{ $professeur->id }} "> {{ $professeur->users->prenom }} {{ $professeur->users->nom }} </option>  
                				@endforeach
                  </select>
                </div>
                @endif

                <div class="col-sm-2">
                  <p class="text-muted">Date : </p>
                </div>

                <div class="col-sm-4">
                     <input type="date" class="form-control" name="date" required="true">
                </div>
          </div>
          <hr>

        	<div class="row">
      	    <div class="col-lg-12">

			          <table id="nosearching" class="table table-striped table-bordered nowrap" style="width:100%">
			              <thead> 
					             <tr>
			 		              <th style="text-align: center;"><b>Nom complet</b></th> 
					              <th style="text-align: center;"><b>Début sc </b></th> 
					              <th style="text-align: center;"><b>Fin sc </b></th> 
					              <th style="text-align: center;"><b>Absence</b></th> 
					              <th style="text-align: center;"><b>Justif</b></th> 
			 		              <th style="text-align: center;"><b>Observation</b></th>  
					             </tr> 
					          </thead> 
					          <tbody> 
					            @foreach($allClasses as $classe)
					            <tr>
					             <td style="text-align: center;">{{ $classe->etudiants->users->prenom }} {{ $classe->etudiants->users->titre }}
			        						<input type="hidden" name="etudiant_id[]" value="{{$classe->etudiants->id}}">		             	
					             </td>  
					             <td style="text-align: center;">
			                      <input type="time" class="form-control" name="debutseance[{{ $classe->etudiants->id}}]">
					             </td>  
					             <td style="text-align: center;">
			                      <input type="time" class="form-control" name="finseance[{{ $classe->etudiants->id}}]">
					             </td>  
					             <td style="text-align: center;">
						             	<select class="form-select" name="absence[{{ $classe->etudiants->id}}]">
				                        <option value="" selected disabled="true">Choisir : </option>
			                          <option value="absence"> Absence</option> 
			                          <option value="retard"> Retard</option> 
				                  </select>
			 		             </td> 
			 		             <td style="text-align: center;">
						             	<select class="form-select" name="justification[{{ $classe->etudiants->id}}]">
				                        <option value="" selected disabled="true">Choisir : </option>
			                          <option value="oui"> Oui</option> 
			                          <option value="non"> Non</option> 
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