@extends('backend.master')

@section('title','Les Classes')
@section('content')  

<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header" style="background-color:#207CF3;">
          <h5 class="card-title mb-0" style="color: white;"><strong>Les Classes </strong></h5>
        </div>
        <div class="card-body">

          <table id="example" class="table table-striped" style="width:100%">
                <thead> 
		            <tr>
 		              <th style="text-align: center;"><b>Classe</b></th>  
		              <th style="text-align: center;"><b>Niveau </b></th> 
		              <th style="text-align: center;"><b>Catégorie </b></th>
		              <th style="text-align: center;"><b>Année scolaire </b></th>  
		              <th style="text-align: center;"><b>Paiements</b></th>  
		            </tr> 
		          </thead> 
		          <tbody> 
		            @foreach($allClasses as $classe)
		            <tr>
		             <td style="text-align: center;">{{ $classe->classes->titre }}</th>
 		             <td style="text-align: center;">{{ $classe->classes->niveaus->titre }}</th> 	               	          
		             <td style="text-align: center;">{{ $classe->classes->categories->titre }}</th>  	              
		             <td style="text-align: center;">{{ $classe->années->titre }}</th>  	 
		             <td style="text-align: center;">
		               	<a href="{{url('/classe/'.$classe->classes->id.'/nouvelle_paiement')}}" title="¨Paiements">
		               		<i class="align-middle me-2" data-feather="credit-card"></i> 
	                  	</a> 
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