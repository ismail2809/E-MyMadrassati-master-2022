@extends('back.master') 
@section('title','Mes notes')
@section('content')

<div class="row">
	<div class="col-md-12">
	  <div class="card">
	    <div class="card-header card-header-warning card-header-icon">
	      <div class="card-icon">
	        <i class="material-icons">assignment</i>
	      </div>
	      <h4 class="card-title">Mes notes</h4>
	    </div>
	    <div class="card-body">
	      <div class="toolbar">
	        <!--        Here you can write extra buttons/actions for the toolbar              -->
	      </div>
	      <div class="material-datatables">
            

	        <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
	          <thead>
	            <tr>  
	              <th style="color:red;text-align: center;">Professeur</th>
	              <th style="color:red;text-align: center;">Classe</th>
	              <th style="color:red;text-align: center;">Matière</th>
	              <th style="color:red;text-align: center;">Note</th>
	              <th style="color:red;text-align: center;">Oservation</th>
	              <th style="color:red;text-align: center;">Date</th>   
	              <th style="color:red;text-align: center;">Année</th>   
	            </tr>
	          </thead> 
	          <tbody>
	          @foreach($notes as $note)

	            <tr>
 	              <td style="text-align: center;">{{ $note['professeurs']['users']['prenom']}} {{ $note['etudiants']['users']['nom']}}</td>
	              <td style="text-align: center;">{{ $note['classes']['titre']}}</td> 
	              <td style="text-align: center;">{{ $note['matieres']['titre']}}</td> 
	              <td style="text-align: center;">{{ $note['note']}}</td>  
	              <td style="text-align: center;">{{ $note['observation']}}</td>    
	              <td style="text-align: center;">{{ $note['created_at']}}</td>    
	              <td style="text-align: center;">{{ $note['années']['titre'] }}</td>     
	            </tr>            

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