@extends('backend.master') 
@section('title','Modifier type paiement')

@section('content') 

  
<h4 class="h4 mb-3">
<a href="{{url('/type_paiements')}}" title="Retour">
  <i class="align-middle me-2" data-feather="arrow-left-circle"></i>  
</a> 
     <strong> Retour </strong>
</h4>        

<form method="post" action="{{url('/type_paiement/'.$type_paiement->id)}}" class="form-horizontal">         
{{ csrf_field() }}  
<input type="hidden" name="_method" value="PUT">

<div class="row">
    <div class="col-lg-12">
      <div class="card">
       
        <div class="card-header" style="background-color:orange;">
          <h5 class="card-title mb-0" style="color: white;">Modifier type paiement</h5>
        </div>
      
        <div class="card-body"> 
            <div class="row"> 

                <div class="col-sm-4">
                  <p class="text-muted">Titre : </p>
                </div>

                <div class="col-sm-8">
                       <input type="text" class="form-control mb-3" placeholder="Titre" name="titre" value="{{ $type_paiement->titre }}">
                </div>

                <div class="col-sm-4">
                  <p class="text-muted">Montant : </p>
                </div>

                <div class="col-sm-8">
                       <input type="text" class="form-control mb-3" placeholder="Montant" name="montant" value="{{ $type_paiement->montant }}">
                </div> 

                <div class="col-sm-4">
                  <p class="text-muted">Description : </p>
                </div>

                <div class="col-sm-8">
                      <textarea class="form-control mb-3" rows="7" name="description" >{{ $type_paiement->description }}</textarea>
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

