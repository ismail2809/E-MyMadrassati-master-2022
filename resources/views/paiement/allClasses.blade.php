@extends('backend.master')

@section('title','Nouvelle paiement | Les Classes')
@section('content')  

<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header" style="background-color:#207CF3;">
          <h5 class="card-title mb-0" style="color: white;"><strong> Nouvelle paiement </strong>| Les Classes </h5>
        </div>
        <div class="card-body">

          <table id="example" class="table table-striped" style="width:100%">
                <thead> 
		            <tr>
 		              <th style="text-align: center;"><b>Classe</b></th>  
		              <th style="text-align: center;"><b>Niveau </b></th> 
		              <th style="text-align: center;"><b>Catégorie </b></th>
		              <th style="text-align: center;"><b>Année scolaire </b></th>  
		              <th style="text-align: center;"><b>Etudiants</b></th>  
		            </tr> 
		          </thead> 
		          <tbody> 
		            @foreach($allClasses as $classe)
		            <tr>
		             <td style="text-align: center;">{{ $classe->classes->titre }}</td>
 		             <td style="text-align: center;">{{ $classe->classes->niveaus->titre }}</td> 	               	          
		             <td style="text-align: center;">{{ $classe->classes->categories->titre }}</td>  	              
		             <td style="text-align: center;">{{ $classe->années->titre }}</td>  	 
		             <td style="text-align: center;">
		               	<a href="{{url('/classe/'.$classe->classes->id.'/nouvelle_paiement')}}" title="¨Paiements">
		               		<i class="align-middle me-2" data-feather="eye"></i> 
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