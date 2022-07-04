@extends('back.master') 
@section('title','Détail Professeur')

@section('content') 

<div class="row">
	<div class="col-md-12">
	  <div class="card">
	    <div class="card-header card-header-info card-header-icon">
	      <div class="card-icon">
	        <i class="material-icons">assignment</i>
	      </div>
	      <h4 class="card-title">Détail Professeur</h4>
	    </div>
	    <div class="card-body">
	      <div class="toolbar">
	        <!--        Here you can write extra buttons/actions for the toolbar              -->
	      </div>
	      <div class="material-datatables">
	           <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
	          <thead>
	            <tr style="text-align: center;">
 	              <th style="color: red"><b>Nom complet</b></th>  
	              <th style="color: red"><b>Date naissance</b></th>
	              <th style="color: red"><b>Lieu naissance</b></th>
	              <th style="color: red"><b>Sexe</b></th>
	              <th style="color: red"><b>Adresse</b></th>
	              <th style="color: red"><b>CiN</b></th>
	              <th style="color: red"><b>Diplome</b></th>
	              <th style="color: red"><b>Promotion</b></th>   
	              <th style="color: red"><b>Création</b></th>    
	            </tr>
	          </thead> 
	          <tbody>
 	            <tr style="text-align: center;">
 	              <td>{{ $professeur->users->prenom }} {{ $professeur->users->nom }}</td>  
	              <td>{{ $professeur->users->ddn }}</td> 
	              <td>{{ $professeur->users->lieu_naissance }}</td> 
	              <td>{{ $professeur->users->sexe }}</td> 
	              <td>{{ $professeur->users->adresse }}</td> 
	              <td>{{ $professeur->cin }}</td> 
	              <td>{{ $professeur->diplome }}</td> 
	              <td>{{ $professeur->promo }}</td>  
	              <td>{{ $professeur->created_at->format('d-m-Y') }}</td> 
	               
	            </tr>              
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