@extends('back.master') 
@section('title','Toutes les Notes Des Etudiants')
@section('content')

<div class="row">

	<div class="col-lg-4">
	    <div class="card card-stats">
	      <div class="card-header card-header-warning card-header-icon">
	        <div class="card-icon">
	          <i class="material-icons">contact_mail</i>
	        </div>
	        <p class="card-category">Total </p>
	        <h3 class="card-title">{{ $sumNote }}</h3>
	      </div>
	    </div>
	</div>
	
	<div class="col-lg-4">
	    <div class="card card-stats">
	      <div class="card-header card-header-info card-header-icon">
	        <div class="card-icon">
	          <i class="material-icons">receipt</i>
	        </div>
	        <p class="card-category">Total mensuelle</p>
	        <h3 class="card-title">{{ $sumNoteMonth  }}</h3>
	      </div>
	    </div>
	</div>
	
	<div class="col-lg-4">
	    <div class="card card-stats">
	      <div class="card-header card-header-rose card-header-icon">
	        <div class="card-icon">
	          <i class="material-icons">card_travel</i>
	        </div>
	        <p class="card-category">Total aujourd'hui</p>
	        <h3 class="card-title">{{ $sumNoteDay }}</h3>
	      </div>
	    </div>
	</div> 

	<div class="col-md-12">
	  <div class="card">
	    <div class="card-header card-header-warning card-header-icon">
	      <div class="card-icon">
	        <i class="material-icons">assignment</i>
	      </div>
	      <h4 class="card-title">Toutes les Notes Des Etudiants</h4>
	    </div>
	    <div class="card-body">
	      <div class="toolbar">
 	      </div>
	      <div class="material-datatables"> 

	        <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
	          <thead>
                <tr>
 	              <th style="color: red">Prénom Nom</th>
 	              <th style="color: red">Professeur</th>
	              <th style="color: red">Classe</th>
	              <th style="color: red">Matière</th>   
	              <th style="color: red">Note</th>   
	              <th style="color: red">Observation</th>   
	              <th style="color: red">Année</th>  
	              <th style="color: red" class="disabled-sorting text-center">Actions</th> 
	            </tr>
	          </thead> 
	          <tbody>
	          @foreach($notes as $note)
	          		        
	            <tr>
	              <td>{{ $note['etudiants']['users']['prenom']}} {{ $note['etudiants']['users']['nom']}}</td>
	              <td>{{ $note['professeurs']['users']['prenom']}} {{ $note['professeurs']['users']['nom']}}</td> 
	              <td>{{ $note['classes']['titre'] }}</td>
	              <td>{{ $note['matieres']['titre'] }}</td>   
	              <td>{{ $note['note'] }}</td> 
	              <td>{{ $note['observation'] }}</td> 
	              <td>{{ $note['années']['titre'] }}</td> 
	              <td class="td-actions text-center">
	              	<a href="{{ url('note/'.$note['etudiant_id'].'/détail') }}"  class="btn btn-info btn-round" title="Détail"><i class="material-icons">remove_red_eye</i></a> 
	              </td>
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