@extends('back.master') 
@section('title','Lise des utilisateurs')

@section('content') 

<div class="row">

	<div class="col-md-12">
	  <div class="card">
	    <div class="card-header card-header-info card-header-icon">
	      <div class="card-icon">
	        <i class="material-icons">assignment</i>
	      </div>
	      <h4 class="card-title">Lise des utilisateurs</h4>
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
 	              <th style="text-align: center;color: red"><b>Role </b></th> 
 	              <th style="text-align: center;color: red"><b>Action</b></th>  
	            </tr> 
	          </thead> 
	          <tbody> 
	            @foreach($users as $user)
	            <tr>
	             <td style="text-align: center;">{{ $user->prenom }} {{ $user->nom }}</td> 	              
	             <td style="text-align: center;">{{ $user->email }}</td> 	 
	              <td style="text-align: center;">
				  @if(!empty($user->getRoleNames()))
				  @foreach($user->getRoleNames() as $v)	             	
	             	<label class="badge badge-success">{{ $v }}</label>
	              @endforeach
				  @endif
	              </td> 				       				
	              <td class="td-actions text-center">
	              	   <a class="btn btn-info" title="détail compte" href="{{ url('/user/'.$user->id.'/detail') }}"><i class="material-icons">remove_red_eye</i> </a>
		               	<a href="{{url('/user/'.$user->id.'/edit_password')}}"  class="btn btn-success btn-round" title="modifier mot de passe compte"><i class="material-icons">lock</i> 
	                  	</a> 
				       <a class="btn btn-warning" title="modifier compte" href="{{ url('/user/'.$user->id.'/edit') }}"><i class="material-icons">edit</i></a>	    

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