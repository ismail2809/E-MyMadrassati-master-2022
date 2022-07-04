@extends('back.master') 
@section('title','Nouvelle demande')

@section('content') 
<div class="row"> 

<div class="col-md-12">
  <div class="card ">
      
    <form method="post" action="{{ url('/demandedocument') }}" class="form-horizontal">         
          {{ csrf_field() }} 
      
      <div class="card-header card-header-success card-header-text">
        <div class="card-text">
          <h4 class="card-title">Demandes Documents</h4>
        </div>
      </div>

      <div class="card-body">
          <div class="row">             
             <label class="col-sm-2 col-form-label">Sujet</label>
              <div class="col-sm-4">
                <div class="form-group select-wizard">
                   <select class="selectpicker" data-size="7" data-style="select-with-transition" title="Sujet" name="sujet">
                      <option disabled selected>Choisir Sujet </option>
                      <option value="Demande attestation de réussite">Demande attestation de réussite </option>
                      <option value="Demande attestation de scholarité">Demande attestation de scholarité <option> 
                    </select>
                </div>
              </div> 

             <label class="col-sm-2 col-form-label">Année Scholaire</label>
              <div class="col-sm-4">
                <div class="form-group select-wizard">
                   <select class="selectpicker" data-size="7" data-style="select-with-transition" name="annee_id" title="Année Scholaire"> 
                    @foreach($années as $année)
                    <option value="{{ $année->id }}"> {{ $année->titre}} </option> 
                    @endforeach
                  </select>
                </div>
              </div>  
          </div>

           <div class="row">
            <label class="col-sm-2 col-form-label">Description </label>
            <div class="col-sm-10">
              <div class="form-group">
                  <textarea class="form-control" rows="7" name="description" placeholder="Ecris ..."></textarea>
              </div>
            </div>
          </div> 

          <input type="hidden" class="form-control" name="user_id" value="{{ Auth::user()->id }}">         
      </div>

     <div class="card-footer">
        <div class="ml-auto">
          <input type="submit" class="btn btn-next btn-fill btn-info btn-wd" value="Valider">
        </div>
        <div class="clearfix"></div>
     </div>
    
  </form>
  
  </div>
</div>


 @endsection