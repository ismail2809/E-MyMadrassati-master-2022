@extends('backend.master') 
@section('title','Ajouter type paiement')

@section('content') 

  
<h4 class="h4 mb-3">
<a href="{{url('/niveaus')}}" title="Retour">
  <i class="align-middle me-2" data-feather="arrow-left-circle"></i>  
</a> 
     <strong>  Retour </strong>
</h4>        

<form method="post" action="{{url('/type_paiement')}}">
{{ csrf_field() }} 

<div class="row">
    <div class="col-lg-12">
      <div class="card">
       
        <div class="card-header" style="background-color:#207CF3;">
          <h5 class="card-title mb-0" style="color: white;">Nouveau type paiement</h5>
        </div>
      
        <div class="card-body"> 
            <div class="row"> 

                <div class="col-sm-4">
                  <p class="text-muted">Titre : </p>
                </div>

                <div class="col-sm-8">
                       <input type="text" class="form-control mb-3" placeholder="Titre" name="titre" autocomplete="off" required>
                </div> 

                <div class="col-sm-4">
                  <p class="text-muted">Montant : </p>
                </div>

                <div class="col-sm-8">
                       <input type="number" class="form-control mb-3" placeholder="Montant" name="montant"   required>
                </div> 

                <div class="col-sm-4">
                  <p class="text-muted">Description : </p>
                </div>

                <div class="col-sm-8">
                      <textarea class="form-control mb-3" rows="7" name="description" placeholder="Description"></textarea>
                </div> 

                <div class="col-sm-12">
		           				<input type="submit" class="btn btn-info" value="Valider">
                </div>

            </div>
        </div>

      </div>
    </div>
</div>

</form>
 
@endsection