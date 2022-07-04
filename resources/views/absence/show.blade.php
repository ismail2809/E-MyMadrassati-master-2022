@extends('back.master') 
@section('title','Détail absence')
@section('content')
<div class="row">
	<div class="col-md-12">
	  <div class="card">
	    <div class="card-header card-header-info card-header-icon">
	      <div class="card-icon">
	        <i class="material-icons">assignment</i>
	      </div>
	      <h4 class="card-title">Détail absence</h4>
	    </div>
	    <div class="card-body">
	      <div class="toolbar">
	        <!--        Here you can write extra buttons/actions for the toolbar              -->
	      </div>
	      <div class="material-datatables">
	        <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
	          <thead>
	            <tr>
 	              <th class="text-center" style="color: red">Nom Complet</th>
	              <th class="text-center" style="color: red">Professeur</th>
	              <th class="text-center" style="color: red">Classe</th>
	              <th class="text-center" style="color: red">Absence</th>
	              <th class="text-center" style="color: red">Justifié</th>  
	              <th class="text-center" style="color: red">Début seance</th>  	              
	              <th class="text-center" style="color: red">Fin seance</th>  	              
	              <th class="text-center" style="color: red">Date</th>  	              
	              <th class="text-center" style="color: red">observation</th>  
	              <th class="text-center" style="color: red">Année</th>  
	              <th class="text-center" style="color: red" colspan="2">Actions</th>
	            </tr>
	          </thead> 
	          <tbody>
 
 	            <tr>
	              <td class="text-center" >{{ $user['prenom'] }} {{ $user['nom']}}</td> 
	              <td class="text-center" >{{ $professeur['prenom'] }} {{ $professeur['nom']}}</td> 
	              <td class="text-center" >{{ $absence['classes']['titre']}}</td> 
	              <td class="text-center" >{{ $absence['absence']}}</td> 
	              <td class="text-center" >{{ $absence['absence']}}</td> 
	              <td class="text-center" >{{ $absence['debutseance'] }}</td> 
	              <td class="text-center" >{{ $absence['finseance'] }}</td> 
	              <td class="text-center" >{{ \Carbon\Carbon::parse($absence['created_at'])->format('d-m-Y') }}</td> 
	              <td class="text-center" >{{ $absence['observation'] }}</td> 
	              <td class="text-center" >{{ $absence['années']['titre']}}</td> 
	              <td class="td-actions text-right">
	               	<a href="{{url('/absence/'.$absence['id'].'/edit')}}" type="button" class="btn btn-warning btn-round" title="Modifier"><i class="material-icons">edit</i> 
                  	</a> 
                  </td>
                  <td class="td-actions text-right">
                  	 <form action="{{url('/absence/'.$absence['id'])}}" method="get">
	                      {{csrf_field()}}
	                      {{method_field('DELETE')}}
	                      <button type="submit"  class="btn btn-danger btn-round" title="Suprimer" style="padding: 6px;">
	                      <i class="material-icons">close</i>
	                      </button>
                     </form>  
	              </td>
	              </td>
	            </tr>          

	          </tbody>
	        </table>
	      </div>
	    <!-- end content-->
	  </div>
	  <!--  end card  -->
	</div>
	<!-- end col-md-12 -->
</div> 
 
@endsection	      