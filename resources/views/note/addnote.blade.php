@extends('back.master') 
@section('title','Nouvelle note')

@section('content') 
 
<div class="row">

<div class="col-md-12">
 <div class="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <i class="material-icons">close</i>
    </button>
    <span style="text-align: center;">
      <b>Numéro d'inscription : </b> {{ $inscription['num_inscription']}}   &nbsp;&nbsp; | &nbsp;&nbsp; 
      <b>Prénom Nom : </b>           {{ $inscription['etudiants']['users']['prenom'] }} {{ $inscription['etudiants']['users']['nom'] }} &nbsp;&nbsp;| &nbsp;&nbsp; 
      <b>Classe:</b>                 {{ $inscription['classes']['titre'] }} &nbsp;&nbsp;| &nbsp;&nbsp; 
      <b>Matière: </b>               {{ $data['matiere']['titre']  }} &nbsp;&nbsp;| &nbsp;&nbsp; 
      <b>Année:</b>                  {{ $inscription['années']['titre'] }}   &nbsp;&nbsp; &nbsp;&nbsp;  
    </span>
 </div>
</div>

<div class="col-md-12">
  <div class="card ">
    <div class="card-header card-header-success card-header-text">
      <div class="card-text">
        <h4 class="card-title">Ajouter Note</h4>
      </div>
    </div>

    <form action="{{url('/note')}}" method="post" class="form-horizontal">
            {{ csrf_field() }}

    <div class="card-body">
          <div class="row">
            <label class="col-sm-2 col-form-label">Note</label>
              <div class="col-sm-8">
                <div class="form-group">
                  <input type="number" class="form-control" name="note">
                </div>
              </div>
          </div>

          <div class="row">
            <label class="col-sm-2 col-form-label">Observation </label>
            <div class="col-sm-8">
              <div class="form-group">
                  <textarea class="form-control" rows="3" name="observation"></textarea>
              </div>
            </div>
          </div> 
          <input type="hidden" class="form-control" name="etudiant_id"   value="{{ $inscription['etudiant_id'] }}">
          <input type="hidden" class="form-control" name="professeur_id" value="1">
          <input type="hidden" class="form-control" name="classe_id" value="{{ $data['classe'] }}">
          <input type="hidden" class="form-control" name="annee_id" value="{{ $data['année'] }}">
          <input type="hidden" class="form-control" name="matiere_id" value="{{ $data['matiere']['id'] }}">         
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

</option>
@endsection