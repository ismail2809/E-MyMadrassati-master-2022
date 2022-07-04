@extends('back.master') 
@section('title','Liste des notes')

@section('content') 

<div class="row"> 

    <div class="col-lg-3">
	    <div class="card card-stats">
	      <div class="card-header card-header-warning card-header-icon">
	        <div class="card-icon">
	          <i class="material-icons">contact_mail</i>
	        </div>
	        <p class="card-category">Total </p>
	        <h3 class="card-title">{{ $sumnote }}</h3>
	      </div>
	    </div>
	</div>
	
	<div class="col-lg-3">
	    <div class="card card-stats">
	      <div class="card-header card-header-info card-header-icon">
	        <div class="card-icon">
	          <i class="material-icons">receipt</i>
	        </div>
	        <p class="card-category">Total mensuelle</p>
	        <h3 class="card-title">{{ $sumnoteMonth  }}</h3>
	      </div>
	    </div>
	</div>
	
	<div class="col-lg-3">
	    <div class="card card-stats">
	      <div class="card-header card-header-rose card-header-icon">
	        <div class="card-icon">
	          <i class="material-icons">card_travel</i>
	        </div>
	        <p class="card-category">Total aujourd'hui</p>
	        <h3 class="card-title">{{ $sumnoteDay }}</h3>
	      </div>
	    </div>
	</div>
	
	<div class="col-lg-3">
	    <div class="card card-stats">
	      <div class="card-header card-header-success card-header-icon">
	        <div class="card-icon">
	          <i class="material-icons">equalizer</i>
	        </div>
	        <p class="card-category">note / Retard </p>
	        <h3 class="card-title"> {{ $sumnoteA }} / {{ $sumnoteRetard }} </h3>
	      </div>
	    </div>
	</div>
 		
	<div class="col-md-12">
	  <div class="card">
	  	<div class="card-header card-header-info card-header-icon">
	      <div class="card-icon">
	        <i class="material-icons">assignment</i>
	      </div>
	      <h4 class="card-title">Liste des notes</h4>
	    </div>

	    <div class="card-body">
	      <div class="toolbar">
	        <!--        Here you can write extra buttons/actions for the toolbar              -->
	      </div>
	      <div class="material-datatables"> 

	        <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
	          <thead>
	            <tr> 
	              <th style="color: red"><b>Etudiant</b></th> 
	              <th style="color: red"><b>Professeur</b></th> 
	              <th style="color: red"><b>Matière</b></th> 
	              <th style="color: red"><b>Debut seance</b></th>
	              <th style="color: red"><b>Fin seance</b></th>
	              <th style="color: red"><b>note / Retard</b></th>
	              <th style="color: red"><b>Observation</b></th> 
	              <th style="color: red"><b>Année</b></th>    
	              <th style="color: red"><b>Création</b></th>   
	              <th style="color: red"><b>détail</b></th>
	            </tr>
	          </thead> 
	          <tbody>
	            @foreach($note_classe as $note)
	            <tr> 
	              <td>{{ $note['etudiants']['users']['prenom'] }} {{ $note['etudiants']['users']['nom'] }}</td> 
	               <td>{{ $note['professeurs']['users']['prenom'] }} {{ $note['professeurs']['users']['nom'] }}</td> 
 	              <td>{{ $note['matieres']['titre'] }}</td> 
 	              <td>{{ $note['debutseance'] }}</td> 
 	              <td>{{ $note['finseance'] }}</td> 
 	              <td>{{ $note['note'] }}</td> 
	              <td>{{ $note['observation'] }}</td> 
	              <td>{{ $note['années']['titre'] }}</td>  
	              <td>{{ isset($note['created_at'])?$note['created_at']:$note['created_at'] }}</td> 
	              <td class="td-actions">
	               	<a href="{{url('/note/'.$note['id'].'/détail')}}"  class="btn btn-info btn-round" title="détail"><i class="material-icons">remove_red_eye</i> 
                  	</a> 
                  </td>              
	            </tr>
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