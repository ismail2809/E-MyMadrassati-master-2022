@extends('backend.master')

@section('title','Les types paiements')
@section('content') 
   
<h4 class="h4 mb-3">
 <a href="{{url('/type_paiement/new')}}" title="Retour">
<i class="align-middle me-2" data-feather="plus-circle"></i>  Nouveau
</a> 
</h4>

<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header" style="background-color:#207CF3;">
          <h5 class="card-title mb-0" style="color: white;"><strong>Les types paiements </strong></h5>
        </div>
        <div class="card-body">

          <table id="example" class="table table-striped" style="width:100%">
                <thead> 
		            <tr>
		              <th style="text-align: center;color: red"><b>ID</b></th> 
		              <th style="text-align: center;color: red"><b>Titre</b></th> 
		              <th style="text-align: center;color: red"><b>Montant</b></th> 
		              <th style="text-align: center;color: red"><b>Description</b></th> 
		              <th style="text-align: center;color: red"><b>actions</b></th>
		              <th style="text-align: center;"></th>
		            </tr> 
		          </thead> 
		          <tbody> 
		            @foreach($type_paiements as $type_paiement)
		            <tr>
		             <td style="text-align: center;">{{ $type_paiement->id }}</td> 	              
		             <td style="text-align: center;">{{ $type_paiement->titre }}</td> 	              
		             <td style="text-align: center;">{{ $type_paiement->montant }}</td> 	              
		             <td style="text-align: center;">{{ $type_paiement->description }}</td> 	              
		             <td style="text-align: center;">
		               	<a href="{{url('/type_paiement/'.$type_paiement->id.'/edit')}}" title="Modifier">
		               		<i class="align-middle me-2" data-feather="edit"></i> 
	                  	</a> 
	                 </td>   
	                 <td style="text-align: center;">
	                  	 <form action="{{url('/type_paiement/'.$type_paiement->id)}}" method="post">
		                      {{csrf_field()}}
		                      {{method_field('DELETE')}}
		                      <button type="submit"  class="btn btn-danger btn-sm" title="Suprimer">
                            <i class="align-middle" data-feather="trash-2"></i> 
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