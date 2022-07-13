@extends('backend.master')

@section('title','Les contacts')
@section('content') 
   
<h4 class="h4 mb-3">
 <a href="{{url('/contact/new')}}" title="Retour">
<i class="align-middle me-2" data-feather="plus-circle"></i>  Nouvelle
</a> 
</h4>

<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header" style="background-color:#207CF3;">
          <h5 class="card-title mb-0" style="color: white;"><strong>Les contacts </strong></h5>
        </div>
        <div class="card-body">

          <table id="example" class="table table-striped" style="width:100%">
              <thead> 
		            <tr>
		              <th style="text-align: center;color: red"><b>ID</b></th> 
		              <th style="text-align: center;color: red"><b>Name</b></th> 
		              <th style="text-align: center;color: red"><b>Objet</b></th>  
		              <th style="text-align: center;color: red"><b>Telephone</b></th>  
		              <th style="text-align: center;color: red"><b>actions</b></th>
		              <th style="text-align: center;"></th>
		              <th style="text-align: center;"></th>
		            </tr> 
		          </thead> 
		          <tbody> 
		            @foreach($contacts as $contact)
		            <tr>
		             <td style="text-align: center;">{{ $contact->id }}</th> 	              
		             <td style="text-align: center;">{{ $contact->name }}</th> 	              
		             <td style="text-align: center;">{{ $contact->objet }}</th>   	              
		             <td style="text-align: center;">{{ $contact->telephone }}</th>  	              
		             <td style="text-align: center;">
		               	<a href="{{ url('/contact/'.$contact->id.'/detail') }}" title="Détail">
		               		<i class="align-middle me-2" data-feather="eye"></i> 
	                  	</a> 
	                </td>   
	                <td style="text-align: center;">
		               	<a href="{{url('/contact/'.$contact->id.'/edit')}}" title="Modifier">
		               		<i class="align-middle me-2" data-feather="edit"></i> 
	                  	</a> 
	                </td>   	                
	                <td style="text-align: center;">
	                  	 <form action="{{url('/contact/'.$contact->id)}}" method="post">
		                      {{csrf_field()}}
		                      {{method_field('DELETE')}}
		                      <button type="submit"  class="btn btn-danger btn-round" title="Suprimer">
		                 	     <i class="align-middle me-2" data-feather="trash-2"></i>
		                      </button>
	                     </form>  
		             </td>                
		            </tr>       
		            @endforeach       
		        	</tbody>
            </table>
        </div>
      </div>
    </div>
</div>
  
@endsection