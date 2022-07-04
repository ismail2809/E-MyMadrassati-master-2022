@extends('back.master') 
@section('title','Liste des notes')
@section('content')

<div class="row">
	<div class="col-md-12">
	  <div class="card">
	    <div class="card-header card-header-warning card-header-icon">
	      <div class="card-icon">
	        <i class="material-icons">assignment</i>
	      </div>
	      <h4 class="card-title">Liste notes des étudiants</h4>
	    </div>
	    <div class="card-body">
	      <div class="toolbar">
	        <!--        Here you can write extra buttons/actions for the toolbar              -->
	      </div>
	      <div class="material-datatables"> 

	        <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
	          <thead> 
	            <tr> 
	              <th style="color: red">Prénom Nom</th>
	              <th style="color: red">Classe</th>	               
	              <th style="color: red">Professeur</th> 
	              <th style="color: red">Matière</th>     	               
	              <th style="color: red">Notes </th>   
	              <th style="color: red">Observation </th>   
	              <th style="color: red">Année</th>  
	              <th style="color: red" class="disabled-sorting text-center">Actions</th>
	            </tr>
 
	          </thead> 
	          <tbody>				
				@foreach($listNotes as $key => $results) 
					@foreach($results as $key => $result) 

	            <tr> 
	              <td>{{ $result['etudiants']['users']['prenom'] }} {{ $result['etudiants']['users']['nom'] }}</td>
	              <td>{{ $result['classes']['titre'] }}</td> 					
	              <td>{{ $result['professeurs']['users']['prenom'] }} {{ $result['professeurs']['users']['nom'] }}</td>
	              <td>{{ $result['matieres']['titre'] }}</td> 					
	              <td>{{ $result['note'] }}</td>  		              
	              <td>{{ $result['observation'] }}</td>  		              
	              <td>{{ $result['années']['titre'] }}</td> 
             	  <td class="td-actions text-center">
	              	<a href="{{ url('note/'.$result['id'].'/edit') }}"  class="btn btn-warning btn-round" title="Modifier"><i class="material-icons">edit</i></a> 
	              </td>
	            </tr>    
					
					@endforeach	                                
				@endforeach	                                
	          </tbody>
	        </table>
	      </div>
	    </div>
	    <!-- end content-->
	  </div>
	  <!--  end card  -->
	</div>
	<!-- end col-md-12 -->
</div> 
 
@endsection