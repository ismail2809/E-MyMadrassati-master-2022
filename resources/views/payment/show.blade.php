@extends('back.master') 
@section('title','Nouveau payment')

@section('content') 

<div class="row">
	<div class="col-md-12">
	  <div class="card">
	    <div class="card-header card-header-info card-header-icon">
	      <div class="card-icon">
	        <i class="material-icons">assignment</i>
	      </div>
	      <h4 class="card-title">Payment</h4>
	    </div>
	    <div class="card-body">
	      <div class="toolbar">
	        <!--        Here you can write extra buttons/actions for the toolbar              -->
	      </div>
	      <div class="material-datatables">
	           <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
	          <thead>
	            <tr>
	              <th style="color: red"><b>Numero d'inscription</b></th>
	              <th style="color: red"><b>Prénom Nom</b></th> 
	              <th style="color: red"><b>Versement</b></th>
	              <th style="color: red"><b>Mode</b></th>
	              <th style="color: red"><b>Année</b></th>  
	              <th style="color: red"><b>Description</b></th>  
	              <th style="color: red"><b>Création</b></th>   
	              <th style="color: red" style="text-align: right;"><b>actions</b></th> 
	              <th style="color: red" style="text-align: center;"><b></b></th> 
	            </tr>
	          </thead> 
	          <tbody>
 	            <tr>
	              <td>{{ $payment->inscriptions['num_inscription'] }}</td> 
	              <td>{{ $payment->etudiants->users->prenom }} {{ $payment->etudiants->users->nom }}</td> 
 	              <td>{{ $payment->versement }}</td> 
	              <td>{{ $payment->mode }}</td> 
	              <td>{{ $payment->années->titre }}</td> 
	              <td>{{ $payment->description }}</td> 
	              <td>{{ isset($payment->created_at)?$payment->created_at->format('d-m-Y'):$payment->created_at }}</td> 
	              <td class="td-actions text-right">
                  	<a href="{{url('/payment/'.$payment->id.'/edit')}}" type="button" class="btn btn-warning btn-round" title="Modifier"><i class="material-icons">edit</i> 
                  	</a> 
                  </td>                   
                  <td class="td-actions text-left disabled-sorting">
                  	 <form action="{{url('/payment/'.$payment->id)}}" method="post">
	                      {{csrf_field()}}
	                      {{method_field('DELETE')}}
	                      <button type="submit"  class="btn btn-danger btn-round" title="Suprimer" style="padding: 6px;">
	                      <i class="material-icons">close</i>
	                      </button>
                     </form>  
	             </td>   
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