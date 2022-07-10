@extends('backend.master') 
@section('title','Modifier Classe')

@section('content') 

  
<h4 class="h4 mb-3">
<a href="{{url('/classes')}}" title="Retour">
  <i class="align-middle me-2" data-feather="arrow-left-circle"></i>  
</a> 
     <strong> Retour</strong>
</h4>        

<form method="post" action="{{url('/classe/'.$classe->id)}}" class="form-horizontal">         
{{ csrf_field() }}  
<input type="hidden" name="_method" value="PUT">

<div class="row">
    <div class="col-lg-12">
      <div class="card">
       
        <div class="card-header" style="background-color:orange;">
          <h5 class="card-title mb-0" style="color: white;">Modifier classe</h5>
        </div>
      
        <div class="card-body"> 
            <div class="row"> 

                <div class="col-sm-4">
                  <p class="text-muted">Titre : </p>
                </div>

                <div class="col-sm-8">
                       <input type="text" class="form-control mb-3" name="titre" value="{{ $classe->titre }}">
                </div>

                <div class="col-sm-4">
                  <p class="text-muted">Catégorie : </p>
                </div>

                <div class="col-sm-8">
                     <select class="form-select mb-3" name="categorie_id" title="Catégorie">  
                        @foreach($categories as $catégorie)
                          @if($classe->categorie_id == $catégorie->id)
                                <option value="{{ $catégorie->id }}" selected >{{ $catégorie->titre }}</option>
                            @else
                                <option value="{{ $catégorie->id }}" >{{ $catégorie->titre }}</option>
                          @endif
                         @endforeach
                     </select>
                </div>

                <div class="col-sm-4">
                  <p class="text-muted">Niveau : </p>
                </div>

                <div class="col-sm-8">
                     <select class="form-select mb-3" name="niveau_id" title="Niveau">   
                      @foreach($niveaux as $niveau)
                            @if($classe->niveau_id == $niveau->id)
                                <option value="{{ $niveau->id }}" selected >{{ $niveau->titre }}</option>
                            @else
                                <option value="{{ $niveau->id }}" >{{ $niveau->titre }}</option>
                        @endif
                       @endforeach 
                     </select>
                </div> 

                <div class="col-sm-4">
                  <p class="text-muted">Description : </p>
                </div>

                <div class="col-sm-8">
                      <textarea class="form-control mb-3" rows="7" name="description" >{{ $classe->description }}</textarea>
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

