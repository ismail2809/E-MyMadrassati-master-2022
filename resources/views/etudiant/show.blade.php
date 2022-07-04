@extends('back.master') 
@section('title','Détail Etudiant')

@section('content') 

<div class="row">
	<div class="col-md-12">
	  <div class="card">
	    <div class="card-header card-header-info card-header-icon">
	      <div class="card-icon">
	        <i class="material-icons">assignment</i>
	      </div>
	      <h4 class="card-title">Détail Etudiant</h4>
	    </div>
	    <div class="card-body">
	      <div class="toolbar">
	        <!--        Here you can write extra buttons/actions for the toolbar              -->
	      </div>
	      <div class="material-datatables">
	           <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
	          <thead>
	            <tr style="text-align: center;">
 	              <th style="color: red"><b>Prénom Nom</b></th>  
	              <th style="color: red"><b>Date naissance</b></th>
	              <th style="color: red"><b>Lieu naissance</b></th>
	              <th style="color: red"><b>Sexe</b></th>
	              <th style="color: red"><b>Adresse</b></th>
	              <th style="color: red"><b>Tuteur</b></th>
	              <th style="color: red"><b>Email tuteur</b></th>
	              <th style="color: red"><b>Tel tuteur</b></th>  
	              <th style="color: red"><b>Sexe tuteur</b></th>  
	              <th style="color: red"><b>Profession tuteur</b></th>  
	              <th style="color: red"><b>Création</b></th>    
	            </tr>
	          </thead> 
	          <tbody>
 	            <tr style="text-align: center;">
 	              <td>{{ $etudiant->users->prenom }} {{ $etudiant->users->nom }}</td>  
	              <td>{{ $etudiant->users->ddn }}</td> 
	              <td>{{ $etudiant->users->lieu_naissance }}</td> 
	              <td>{{ $etudiant->users->sexe }}</td> 
	              <td>{{ $etudiant->users->adresse }}</td> 
	              <td>{{ $etudiant->prenom_tuteur }} {{ $etudiant->nom_tuteur }}</td> 
	              <td>{{ $etudiant->email_tuteur }}</td> 
	              <td>{{ $etudiant->tel_tuteur }}</td> 
	              <td>{{ $etudiant->sexe_tuteur }}</td> 
	              <td>{{ $etudiant->profession_tuteur }}</td>  
	              <td>{{ $etudiant->created_at->format('d-m-Y') }}</td> 
	               
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