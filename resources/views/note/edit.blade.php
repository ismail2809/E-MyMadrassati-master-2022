@extends('back.master') 
@section('title','Modification Note')

@section('content') 
<div class="row">

<div class="col-md-12">
 <div class="alert"  style="text-align: center;"> 
    <div class="row">
      <div class="col-md-3">Etudiant : <b> {{ $note['etudiants']['users']['prenom'] }} &nbsp; {{ $note['etudiants']['users']['nom'] }} </b></div>
      <div class="col-md-3">Proffesseur : <b> {{ $note['professeurs']['users']['prenom'] }} &nbsp; {{ $note['professeurs']['users']['nom'] }} </b></div>
      <div class="col-md-3">Classe : <b> {{  $note['classes']['titre']  }} </b></div>
      <div class="col-md-3">Année :<b> {{ $note['années']['titre'] }} </b></div>
    </div>
 </div>
</div>

<div class="col-md-12">
  <div class="card ">
    <div class="card-header card-header-warning card-header-text">
      <div class="card-text">
        <h4 class="card-title">Modification Note</h4>
      </div>
    </div>
    <div class="card-body">
      <form method="post" action="{{url('/note/'.$note['id'])}}" class="form-horizontal">         
        {{ csrf_field() }}   
            <input type="hidden" name="_method" value="PUT">

        <div class="row"> 
            <label class="col-sm-2 col-form-label">Année Scholaire</label>
            <div class="col-sm-10">
              <div class="form-group select-wizard">
                <select class="selectpicker" data-size="7" data-style="select-with-transition" title="Année" name="annee_id"> 
                   @foreach($années as $année)
                    @if($note['annee_id'] == $année->id)
                          <option value="{{ $année->id }}" selected >{{ $année->titre }}</option>
                      @else
                          <option value="{{ $année->id }}" >{{ $année->titre }}</option>
                    @endif
                  @endforeach
                </select>
              </div>
            </div> 
        </div>

        <div class="row"> 
           <label class="col-sm-2 col-form-label">Proffesseur</label>
            <div class="col-sm-10">
              <div class="form-group select-wizard">
                 <select class="selectpicker" data-size="7" data-style="select-with-transition" title="Choisir Classe" name="professeur_id">
                        <option value="{{ $note['professeur_id'] }}" selected> {{  $note['professeurs']['users']['prenom']  }}         
                        {{  $note['professeurs']['users']['nom']  }}             
                  </select>
              </div>
            </div> 
        </div> 

         <div class="row"> 
           <label class="col-sm-2 col-form-label">Classe</label>
            <div class="col-sm-10">
              <div class="form-group select-wizard">
                 <select class="selectpicker" data-size="7" data-style="select-with-transition" title="Choisir Classe" name="classe_id">
                    @foreach($classes as $classe)
                      @if($note['classe_id'] == $classe->id)
                          <option value="{{ $note['classes']['id'] }}" selected> {{  $note['classes']['titre']  }}</option>
                        @else
                            <option value="{{ $note['classes']['id'] }}" > {{  $note['classes']['titre']  }}</option>                     
                      @endif
                    @endforeach
                  </select>
              </div>
            </div> 
        </div>

        <div class="row"> 
           <label class="col-sm-2 col-form-label">Matière</label>
            <div class="col-sm-10">
              <div class="form-group select-wizard">
                 <select class="selectpicker" name="matiere_id" data-size="7" data-style="select-with-transition" title="Choisir Matière" >
                  @foreach($matieres as $matiere)
                      @if($note['matiere_id'] == $matiere->id)
                        <option value="{{ $note['matieres']['id'] }}" selected> {{  $note['matieres']['titre'] }} </option>
                      @else
                        <option value="{{ $note['matieres']['id'] }}"> {{  $note['matieres']['titre'] }} </option>
                      @endif
                  @endforeach
                  </select>
              </div>
            </div> 
        </div>

         <div class="row">
          <label class="col-sm-2 col-form-label">Note</label>
          <div class="col-sm-10">
            <div class="form-group">
              <input type="number" class="form-control" name="note" value="{{ $note['note'] }}">
            </div>
          </div>
        </div>

         <div class="row">
          <label class="col-sm-2 col-form-label">Observation </label>
          <div class="col-sm-10">
            <div class="form-group">
                <textarea class="form-control" rows="3" name="observation" >{{  $note['observation'] }}</textarea>
            </div>
          </div>
        </div> 
        <input type="hidden" class="form-control" name="etudiant_id" value="{{ $note['etudiant_id'] }}">
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