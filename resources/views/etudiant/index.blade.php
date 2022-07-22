@extends('back.master') 
@section('title','Lise des Etudiants')

@section('content') 

<div class="row">
	@if ($message = Session::get('info'))
	<div class="alert alert-info col-12 text-center">
	    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	      <i class="material-icons">close</i>
	    </button>
	    <span><b> {{ $message }} </b></span>
	</div>
	@endif
	@if ($message = Session::get('success'))
	<div class="alert alert-success col-12 text-center">
	    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	      <i class="material-icons">close</i>
	    </button>
	    <span><b> {{ $message }} </b></span>
	</div>
	@endif
	@if ($message = Session::get('error'))
	<div class="alert alert-danger col-12 text-center">
	    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	      <i class="material-icons">close</i>
	    </button>
	    <span><b> {{ $message }} </b></span>
	</div>
	@endif
	@if ($message = Session::get('warning'))
	<div class="alert alert-warning col-12 text-center">
	    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	      <i class="material-icons">close</i>
	    </button>
	    <span><b> {{ $message }} </b></span>
	</div>
	@endif 	
	<div class="col-md-12">
	  <div class="card">
	    <div class="card-header card-header-info card-header-icon">
	      <div class="card-icon">
	        <i class="material-icons">assignment</i>
	      </div>
	      <h4 class="card-title">Lise des Etudiants</h4>
	    </div>
	    <div class="card-body">
	      <div class="toolbar">
	        <!--        Here you can write extra buttons/actions for the toolbar              -->
	      </div>
	      <div class="material-datatables">

      	    <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
	          <thead> 
	            <tr>
	              <th style="text-align: center;color: red"><b>Nom complet</b></th> 
	              <th style="text-align: center;color: red"><b>Email</b></th> 
	              <th style="text-align: center;color: red"><b>Tél</b></th> 
	              <th style="text-align: center;color: red"><b>Sexe</b></th> 
	              <th style="text-align: center;color: red"><b>Date naissance</b></th>  
	              <th style="text-align: center;color: red"><b>Action</b></th>  
	            </tr> 
	          </thead> 
	          <tbody> 
	            @foreach($etudiants as $etudiant)
	            <tr>
	             <td style="text-align: center;">{{ $etudiant->users->prenom }} {{ $etudiant->users->nom }}</td> 	              
	             <td style="text-align: center;">{{ $etudiant->users->email }}</td> 	              
	             <td style="text-align: center;">{{ $etudiant->users->tel }}</td> 	              
	             <td style="text-align: center;">{{ $etudiant->users->sexe }}</td> 	              	             
	             <td style="text-align: center;">{{ $etudiant->users->ddn }}</td> 
	             <td class="td-actions text-center">
	               	<a href="{{url('/etudiant/'.$etudiant->id.'/détail')}}"  class="btn btn-info btn-round" title="détail"><i class="material-icons">remove_red_eye</i> 
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