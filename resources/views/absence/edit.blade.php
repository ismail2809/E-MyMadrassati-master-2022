@extends('back.master') 
@section('title','Edit absence')
@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="card">

      <div class="card-header card-header-warning card-header-icon">
        <div class="card-icon">
          <i class="material-icons">assignment</i>
        </div>
        <h4 class="card-title">Edit absence</h4>
      </div>

      <div class="card-body">

        <form action="{{url('/absence/'.$absence['id'])}}" method="post">
        {{ csrf_field() }} 
         <input type="hidden" name="_method" value="PUT">
          <input type="hidden" name="etudiant_id"   value="{{ $absence['etudiant_id'] }}">
          <input type="hidden" name="professeur_id" value="{{ $absence['professeur_id'] }}">

         <div class="row">
             <div class="col-md-4">
                 <div class="form-group select-wizard">
                        <select class="selectpicker" data-size="7" data-style="select-with-transition" name="classe_id" title="Classe"> 
                            <option value="{{ $absence['classes']['id'] }}" selected> {{  $absence['classes']['titre']  }} 
                        </select>
                 </div>
               </div>

               <div class="col-md-4">
                   <div class="form-group select-wizard">
                          <select class="selectpicker" data-size="7" data-style="select-with-transition" name="matiere_id" title="Matière"> 
                            <option value="{{ $absence['matieres']['id'] }}" selected> {{  $absence['matieres']['titre']  }}                      
                          </select>
                    </div>
               </div> 

                <div class="col-md-4">
                    <div class="form-group">
                      <label for="input" class="bmd-label-floating">Début Séance</label>
                      <input id="input" type="time" class="form-control" name="debutseance" value="{{$absence['debutseance']}}">
                    </div>                  
                </div>

                 <div class="col-md-4">
                     <div class="form-group select-wizard">
                           <select class="selectpicker" data-size="7" data-style="select-with-transition" name="annee_id" title="Année"> 
                              <option value="{{ $absence['années']['id'] }}" selected> {{  $absence['années']['titre']  }} 
                              </option> 
                            </select>
                       </div>
                 </div>  
                  
                  <div class="col-md-4">
                      <div class="form-group select-wizard">
                            <select class="selectpicker" name="absence" data-style="select-with-transition" title="Sexe"> 
                                @if($absence['absence'] == 'absence')
                                  <option value="{{ $absence['absence'] }}" selected> Absence </option> 
                                    @else
                                  <option value="{{ $absence['absence'] }}" selected> Retard </option> 
                                @endif
                              </select> 
                      </div>
                  </div>

                  <div class="col-md-4">
                      <div class="form-group">
                        <label for="input2" class="bmd-label-floating">Fin Séance</label>                    
                        <input id="input2" type="time" class="form-control" name="finseance" value="{{$absence['finseance']}}">
                      </div>                  
                  </div>
          </div>

          <hr>

          <div class="row">
            <div class="col-md-12"> 
                <div class="form-group">
                  <label class="bmd-label-floating"> Observation ...</label>
                  <textarea class="form-control" rows="5" name="adresse">{{ $absence['observation']}}</textarea>
                </div>
            </div>
          </div>

          <div class="card-footer">             
             <input type="submit" class="btn btn-success" value="Modifier">
             <div class="clearfix"></div>              
          </div>
         
         </form>

          </div>        
        </div>
    </div>
   </div>            
@endsection   