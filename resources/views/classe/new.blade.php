@extends('backend.master') 
@section('title','Ajouter Classe')
@section('content') 

  
<h4 class="h4 mb-3">
<a href="{{url('/classes')}}" title="Retour">
  <i class="align-middle me-2" data-feather="arrow-left-circle"></i>  
</a> 
     <strong>  Retour </strong>
</h4>        

<form method="post" action="{{url('/classe')}}">
{{ csrf_field() }} 

<div class="row">
    <div class="col-lg-12">
      <div class="card">
       
        <div class="card-header" style="background-color:#207CF3;">
          <h5 class="card-title mb-0" style="color: white;">Nouvelle Classe</h5>
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
                  <p class="text-muted">Catégorie : </p>
                </div>

                <div class="col-sm-8">
                     <select class="form-select mb-3" name="categorie_id" title="Catégorie" required>  
                      @foreach($categories as $categorie)
                          <option value="{{ $categorie->id }}"> {{ $categorie->titre}} </option> 
                      @endforeach 
                     </select>
                </div>

                <div class="col-sm-4">
                  <p class="text-muted">Niveau : </p>
                </div>

                <div class="col-sm-8">
                     <select class="form-select mb-3" name="niveau_id " title="Niveau" required>  
                      @foreach($niveaux as $niveau)
                          <option value="{{ $niveau->id }}"> {{ $niveau->titre}} </option> 
                      @endforeach 
                     </select>
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