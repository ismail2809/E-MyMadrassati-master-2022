@extends('back.master') 
@section('title','Toutes les absences')
@section('content')

<div class="row">

	    <div class="col-lg-4">
	    <div class="card card-stats">
	      <div class="card-header card-header-warning card-header-icon">
	        <div class="card-icon">
	          <i class="material-icons">contact_mail</i>
	        </div>
	        <p class="card-category">Total </p>
	        <h3 class="card-title">{{ $sumabsence }}</h3>
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
	        <h3 class="card-title">{{ $sumabsenceMonth  }}</h3>
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
	        <h3 class="card-title">{{ $sumabsenceDay }}</h3>
	      </div>
	    </div>
	</div> 


	<div class="col-md-12">
	  <div class="card">
	    <div class="card-header card-header-info card-header-icon">
	      <div class="card-icon">
	        <i class="material-icons">assignment</i>
	      </div>
	      <h4 class="card-title">Toutes les absences</h4>
	    </div>
	    <div class="card-body">
	      <div class="toolbar">
	        <!--        Here you can write extra buttons/actions for the toolbar              -->
	      </div>
	      <div class="material-datatables">
	        <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
	          <thead>
	            <tr>
 	              <th class="text-center" style="color: red"><b>Prénom Nom</b></th>
	              <th class="text-center" style="color: red"><b>Professeur</b></th>
	              <th class="text-center" style="color: red"><b>Categorie</b></th>
	              <th class="text-center" style="color: red"><b>Classe</b></th>
  	              <th class="text-center" style="color: red"><b>Début seance</b></th>  	              
	              <th class="text-center" style="color: red"><b>Fin seance</b></th>  	              
	              <th class="text-center" style="color: red"><b>Date</b></th>  	              
 	              <th class="text-center" style="color: red"><b>Année</b></th>  
	              <th class="text-center" style="color: red"><b>Actions</th>
	            </tr>
	          </thead> 
	          <tbody>
	          	@foreach($absences as $absence)  
			            <tr>
			              <td class="text-center">{{ $absence['etudiants']['users']['prenom'] }} {{ $absence['etudiants']['users']['nom'] }} </td> 
			              <td class="text-center">{{ $absence['professeurs']['users']['nom']  }} </td> 
			              <td class="text-center">{{ $absence['classes']['categories']['titre']}} => {{ $absence['classes']['categories']['niveau']}} </td> 
			              <td class="text-center">{{ $absence['classes']['titre']}}</td> 
		  	              <td class="text-center">{{ $absence['debutseance'] }}</td> 
			              <td class="text-center">{{ $absence['finseance'] }}</td> 
			              <td class="text-center">{{ \Carbon\Carbon::parse($absence['created_at'])->format('d-m-Y') }}</td> 
		 	              <td class="text-center">{{ $absence['années']['titre']}}</td> 
			              <td class="td-actions text-center">
			               	<a href="{{url('/absence/'.$absence['id'].'/détail')}}"  class="btn btn-info btn-round" title="détail"><i class="material-icons">remove_red_eye</i> 
		                  	</a> 
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