@extends('backend.master')

@section('title','Nouvelle absence')
@section('content')  

<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header" style="background-color:#207CF3;">
          <h5 class="card-title mb-0" style="color: white;"><strong>Nouvelle absence </strong></h5>
        </div>
        <div class="card-body">
			
			 <form method="post" action="{{url('/store_absence')}}" enctype="multipart/form-data" >
        {{ csrf_field() }} 
        <input type="hidden" name="professeur_id" value="{{Auth::user()['id']}}">
        <input type="hidden" name="classe_id" value="{{$id}}">
        	<div class="row">
                <div class="col-sm-2">
                  <p class="text-muted">Matière : </p>
                </div>

                <div class="col-sm-3">
                     <select class="form-select mb-3" name="matiere_id" required>
	                        <option selected  disabled="true">Choisir : </option>
	                    @foreach($matieres as $matiere)
                          <option value="{{ $matiere->id }}"> {{ $matiere->titre}} </option> 
                      @endforeach
	                  </select>
                </div>
          </div>
          <hr>

        	<div class="row">
      	    <div class="col-lg-12">

          <table class="table table-hover my-0">
              <thead> 
		             <tr>
 		              <th style="text-align: center;"><b>Nom complet</b></th> 
		              <th style="text-align: center;"><b>Début sc </b></th> 
		              <th style="text-align: center;"><b>Fin sc </b></th> 
		              <th style="text-align: center;"><b>Absence</b></th> 
		              <th style="text-align: center;"><b>Observation</b></th>  
		             </tr> 
		          </thead> 
		          <tbody> 
		            @foreach($allClasses as $classe)
		            <tr>
		             <td style="text-align: center;">{{ $classe->etudiants->users->prenom }} {{ $classe->etudiants->users->titre }}
        						<input type="hidden" name="etudiant_id[]" value="{{$classe->etudiants->users->id}}">		             	
		             </td>
 		             <td style="text-align: center;">
                      <input type="time" class="form-control" name="debutseance[]">
		             </td>  
		             <td style="text-align: center;">
                      <input type="time" class="form-control" name="finseance[]">
		             </td>  
		             <td style="text-align: center;">
			             	<select class="form-select" name="absence[]">
	                        <option value="" selected disabled="true">Choisir : </option>
                          <option value="absence"> Absence</option> 
                          <option value="retard"> Retard</option> 
	                  </select>
 		             </td>  	              
		             <td style="text-align: center;">                      
		             	<textarea class="form-control" rows="3" name="observation[]"></textarea>
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