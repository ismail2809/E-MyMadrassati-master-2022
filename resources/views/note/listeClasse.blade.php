@extends('back.master') 
@section('title','Liste des classes')

@section('content') 

<div class="row">     
 		
	<div class="col-md-12">
	  <div class="card">
	  	<div class="card-header card-header-info card-header-icon">
	      <div class="card-icon">
	        <i class="material-icons">assignment</i>
	      </div>
	      <h4 class="card-title">Liste des notes par classe</h4>
	    </div>

	    <div class="card-body">
	      <div class="toolbar">
	        <!--        Here you can write extra buttons/actions for the toolbar              -->
	      </div>
	      <div class="material-datatables"> 

	        <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
	          <thead>
	            <tr>
	              <th style="color: red"><b>Classe</b></th>
	              <th style="color: red"><b>matieres</b></th>  
	              <th style="color: red"><b>Année</b></th>     
	              <th style="color: red;text-align: center;"><b>détail</b></th>
	            </tr>
	          </thead> 
	          <tbody>
	            @foreach($notes_classes as $notes)
	            <tr>
	              <td>{{ $notes->classes->titre }}</td> 
	              <td>{{ $notes->matieres->titre }}  </td> 
 	              <td>{{ $notes->années->titre }}</td>   
	              <td class="td-actions text-center">
	               	<a href="{{url('/notess/'.$notes->classes->id.'/'.$notes->matieres->id.'/classe')}}"  class="btn btn-info btn-round" title="détail"><i class="material-icons">remove_red_eye</i> 
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