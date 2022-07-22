@extends('backend.master') 
@section('title','Lise des utilisateurs')

@section('content') 


<h4 class="h4 mb-3">
 <a class="btn btn-success" href="{{ route('users.create') }}"> 
<i class="align-middle me-2" data-feather="plus-circle"></i>  Create New User
</a> 
</h4>
 
<div class="row">

 

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
	             	<label class="badge bg-success">{{ $v }}</label>
	              @endforeach
				  @endif
	              </td> 				       				
	              <td class="td-actions text-center">
	              	   <a title="détail compte" href="{{ url('/user/'.$user->id.'/detail') }}">
	              	   	<i class="align-middle me-2" data-feather="eye"></i>
	              	    </a>
		               	<a href="{{url('/user/'.$user->id.'/edit_password')}}" title="modifier mot de passe compte">
		               		<i class="align-middle me-2" data-feather="edit-3unlock"></i>
	                  	</a> 
				       <a title="modifier compte" href="{{ url('/user/'.$user->id.'/edit') }}"><i class="align-middle me-2" data-feather="edit"></i>
				       </a>	    

                  </td> 	              	             
	            </tr>       
	            @endforeach       
	          </tbody>
	        </table>

</div> 
 
@endsection