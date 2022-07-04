@extends('back.master') 
@section('title','Nouvelle absence')

@section('content')
<div class="row">
	 <div class="col-sm-12">
	     
	      <div class="card">
	        <div class="card-header card-header-success card-header-icon">
	          <div class="card-icon">
	            <i class="material-icons">assignment</i>
	          </div>
	          <h4 class="card-title">Classe</h4>
	        </div>
	        <div class="card-body">
	          <div class="table-responsive">
	              <form action="{{url('/absence')}}" method="post">
          			{{ csrf_field() }} 
        		
        		<input type="hidden" name="matiere_id" value="{{ $matiere_id }}">                          			
        		<input type="hidden" name="année_id"   value="{{ $année_id }}">                          			
        		<input type="hidden" name="classe_id"  value="{{ $classe_id }}">                          			
        		<input type="hidden" name="professeur_id"  value="1">                          			
	
	            <table class="table table-shopping">
	              <thead>
	                <tr>
	                  <th class="text-center"></th>
	                  <th>Etudiant</th>
	                  <th class="th-description">Absence / Retard</th>
	                  <th class="th-description">Début scéance</th>  
	                  <th class="th-description">Fin scéance</th>  
	                  <th class="th-description">Observation</th>  
	                </tr>
	              </thead>
	              <tbody>	             
	              	@foreach($data as $item)
	              		@if(isset($item['etudiants']['user_id']))
	                  		@php
	                  		$user = App\User::where('id',$item['etudiants']['user_id'])->first();
	                    	@endphp
	                <tr>
	                  <td>
	                    <div class="img-container" style="width: 50px;">
	                      <img src="{{ asset('back/assets/img/product1.jpg') }}" alt="...">
	                    </div>
	                  </td>
	                  <td class="td-name"> 	                   
	                    	<small>{{ $user->prenom }} {{ $user->nom }}</small>	   
	                    	<input type="hidden" name="etudiant_id[]" value="{{ $item['etudiant_id'] }}">                
	                  </td>
	                  <td>
	                    <select class="selectpicker" data-size="7" data-style="select-with-transition" name="absence[]" title="Choisir"> 
	                 		 <option value="Absence"> Absence </option>
	                  		 <option value="Retartd"> Retartd </option> 
	                	</select>
	                  </td>
	                  <td>
	                  	<input type="time" name="debutseance[]" class="form-control">
	                  </td>
	                  <td>
	                  	<input type="time" name="finseance[]" class="form-control">
	                  </td> 
	                  <td class="td-text">
	                    <textarea class="form-control" rows="2" name="observation[]" placeholder="Ecrire ici votre observation"></textarea>		
	                  </td> 
	                </tr>
	                 	@endif
	                @endforeach	             
	                <tr>
	                  <td colspan="2"></td>
	                  <td colspan="2"></td>
	                  <td colspan="2" class="text-right">
	                    <button type="submit" class="btn btn-info btn-round">Enregistrer <i class="material-icons">done</i></button>
	                  </td>
	                </tr>
	              </tbody>
	            </table>
	        	</form>
	          </div>
	        </div>
	      </div>

      </div>
</div> 
@endsection