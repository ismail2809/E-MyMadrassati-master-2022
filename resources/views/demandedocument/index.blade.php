@extends('back.master') 
@section('title','Demandes documents')

@section('content') 

<div class="row">
	<div class="col-md-12">
	  <div class="card">
	    <div class="card-header card-header-info card-header-icon">
	      <div class="card-icon">
	        <i class="material-icons">assignment</i>
	      </div>
	      <h4 class="card-title">Documents</h4>
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
 	              <th style="color: red"><b>Sujet</b></th> 	              
	              <th style="color: red"><b>Description</b></th>
 	              <th style="color: red"><b>Date</b></th>   	              
	              <th style="color: red"><b>Année</b></th>  
	            </tr>
	          </thead> 
	          <tbody>
	            @foreach($demandes as $demande)
	            <tr style="text-align: center;">
 	              <td>{{ $demande->users->prenom }} {{ $demande->users->nom }}</td> 
 	              <td>{{ $demande->sujet }}</td> 
 	              <td>{{ $demande->description }}</td> 
	              <td>{{ isset($demande->created_at)?$demande->created_at->format('d-m-Y'):$demande->created_at }}</td> 
 	              <td>{{ $demande->années->titre }}</td> 
	              <td class="td-actions text-center">
                         <i class="material-icons">remove_red_eye</i>                       
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