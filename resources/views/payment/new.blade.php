@extends('back.master') 
@section('title','Nouveau payment')

@section('content') 

<div class="row">
	<div class="col-md-12">
	  <div class="card">
	  	
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
	              <th style="color: red"><b>Catégorie</b></th>
	              <th style="color: red"><b>Niveau</b></th>
	              <th style="color: red"><b>Classe</b></th>
	              <th style="color: red"><b>Tarif</b></th>
	              <th style="color: red"><b>Année</b></th>  
	              <th style="color: red"><b>Création</b></th>   
	              <th style="color: red"><b>actions</b></th>
	            </tr>
	          </thead> 
	          <tbody>
	            @foreach($inscriptions as $inscription)
	            <tr>
	              <td>{{ $inscription->num_inscription }}</td> 
	              <td>{{ $inscription->etudiants->users->prenom }} {{ $inscription->etudiants->users->nom }}</td> 
	              <td>{{ $inscription->categories->titre }}</td>
	              <td>{{ $inscription->niveaus->titre }}</td> 
	              <td>{{ $inscription->classes->titre }}</td> 
	              <td>{{ $inscription->tarif }}</td> 
	              <td>{{ $inscription->années->titre }}</td> 
	              <td>{{ $inscription->created_at->format('d-m-Y') }}</td> 
	              <td class="td-actions text-center">
	               	<a href="{{url('/payment/add/'.$inscription->id)}}"  class="btn btn-info btn-round" title="détail"><i class="material-icons">monetization_on</i> 
                  	</a> 
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