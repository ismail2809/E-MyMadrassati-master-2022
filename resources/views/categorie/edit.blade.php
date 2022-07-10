@extends('backend.master') 
@section('title','Modifier Catégorie')

@section('content') 

  
<h4 class="h4 mb-3">
<a href="{{url('/categories')}}" title="Retour">
  <i class="align-middle me-2" data-feather="arrow-left-circle"></i>  
</a> 
     <strong> Retour</strong>
</h4>        

<form method="post" action="{{url('/categorie/'.$categorie->id)}}" class="form-horizontal">         
{{ csrf_field() }}  
<input type="hidden" name="_method" value="PUT">

<div class="row">
    <div class="col-lg-12">
      <div class="card">
       
        <div class="card-header" style="background-color:orange;">
          <h5 class="card-title mb-0" style="color: white;">Modifier categorie</h5>
        </div>
      
        <div class="card-body"> 
            <div class="row"> 

                <div class="col-sm-4">
                  <p class="text-muted">Titre : </p>
                </div>

                <div class="col-sm-8">
                       <input type="text" class="form-control mb-3" placeholder="2020/2019" name="titre" value="{{ $categorie->titre }}">
                </div>
 

                <div class="col-sm-4">
                  <p class="text-muted">Description : </p>
                </div>

                <div class="col-sm-8">
                      <textarea class="form-control mb-3" rows="7" name="description" >{{ $categorie->description }}</textarea>
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

