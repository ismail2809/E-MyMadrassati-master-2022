@extends('backend.master')

@section('title','Modifier absence') 
@section('content')  

<h4 class="h4 mb-3">
<a href="{{url('/liste_absences')}}" title="Retour">
  <i class="align-middle me-2" data-feather="arrow-left-circle"></i>  
</a> 
     <strong>  Retour </strong>
</h4>        

<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header" style="background-color:#207CF3;"> 
          <h5 class="card-title mb-0" style="color: white;"><strong> Modifier absence </strong>   
        </div>
        <div class="card-body">


        <form method="post" action="{{url('/absence/'.$absence->id.'/update')}}" class="form-horizontal">         
        {{ csrf_field() }}  
         <input type="hidden" name="_method" value="PUT">
         
          <div class="row"> 

                <div class="col-sm-3">
                  <p class="text-muted">Catégorie : </p>
                </div>

                <div class="col-sm-3">
                     <strong> {{ $absence->classes->categories->titre }} </strong> 
                </div>

                <div class="col-sm-3">
                  <p class="text-muted">Année scolaire : </p>
                </div>

                <div class="col-sm-3">
                     <strong> {{ $absence->années->titre }}</strong>
                </div>
  
                <div class="col-sm-3">
                  <p class="text-muted">Niveau : </p>
                </div>

                <div class="col-sm-3">
                     <strong> {{ $absence->classes->niveaus->titre }}</strong>
                </div>
         
                <div class="col-sm-2">
                  <p class="text-muted">Semestre : </p>
                </div>

                <div class="col-sm-4">
                     <select class="form-select" name="semestre" >
                                <option value="" selected disabled="true">Choisir : </option>
                                @if($absence->semestre == 'semestre1') 
                                <option value="semestre1" selected> Semestre 1</option>  
                                <option value="semestre2"> Semestre 2</option> 
                                <option value="semestre3"> Semestre 3</option> 
                                @elseif($absence->semestre == 'semestre2')
                                <option value="semestre1"> Semestre 1</option>                             
                                <option value="semestre2" selected> Semestre 2</option>  
                                <option value="semestre3"> Semestre 3</option> 
                                @elseif($absence->semestre == 'semestre3') 
                                <option value="semestre1"> Semestre 1</option> 
                                <option value="semestre2"> Semestre 2</option> 
                                <option value="semestre3" selected> Semestre 3</option> 
                                @endif   

                      </select>
                </div>

         </div>

         <div class="row">

                <div class="col-sm-3">
                  <p class="text-muted">Classe : </p>
                </div>

                <div class="col-sm-3">
                     <strong> {{ $absence->classes->titre }}</strong>
                </div>
          
                <div class="col-sm-2">
                  <p class="text-muted">Matière : </p>
                </div>

                <div class="col-sm-4"> 
                     <select class="form-select" name="matiere_id" >
                        <option value="" selected disabled="true">Choisir : </option>
                        @foreach($matieres as $matiere)  
                          @if($absence->matiere_id == $matiere->id)
                                <option value="{{ $matiere->id }}" selected> {{ $matiere->titre }}  </option>  
                            @else
                                <option value="{{ $matiere->id }}"> {{ $matiere->titre }}  </option>  
                          @endif
                        @endforeach
                  </select>
                </div>

                <div class="col-sm-3">
                  <p class="text-muted">Etudiant : </p>
                </div>

                <div class="col-sm-3">
                     <strong>{{ $absence->etudiants->users->prenom }} {{ $absence->etudiants->users->nom }}</strong>
                </div>

                <div class="col-sm-2">
                  <p class="text-muted"> Professeur: </p>
                </div>

                <div class="col-sm-4"> 
                  <select class="form-select" name="professeur_id" >
                        <option value="" selected disabled="true">Choisir : </option>
                        @foreach($professeurs as $professeur)  
                          @if($absence->professeur_id == $professeur->id)
                                <option value="{{ $professeur->id }}" selected> {{ $professeur->users->prenom }} {{ $professeur->users->nom }} </option>  
                            @else
                                <option value="{{ $professeur->id }}"> {{ $professeur->users->prenom }} {{ $professeur->users->nom }} </option>  
                          @endif
                        @endforeach
                  </select>
                </div>
         
                <div class="col-sm-2">
                  <p class="text-muted">Date : </p>
                </div>

                <div class="col-sm-4">
                     <input type="date" class="form-control" name="date" value="{{ $absence->date }}">
                </div>
          </div>  
         <hr>

          <div class="row">
            <table id="nosearching" class="table table-striped table-bordered nowrap" style="width:100%">
                  <thead>
                    <tr>
                      <th style="text-align: center;">ID</th>
                      <th style="text-align: center;">Date debut</th>
                      <th style="text-align: center;">Date fin</th>
                      <th style="text-align: center;">Absence/Retard</th> 
                      <th style="text-align: center;">Justif</th> 
                      <th style="text-align: center;">Observation</th> 
                    </tr>
                  </thead>
                  <tbody>
                    <tr> 
                      <td style="text-align: center;">
                          {{ $absence->id}}
                      </td>
                      <td style="text-align: center;">
                          <input type="time" class="form-control" name="debutseance" value="{{ $absence->debutseance}}">
                       </td>  
                       <td style="text-align: center;">
                            <input type="time" class="form-control" name="finseance" value="{{ $absence->finseance}}">
                       </td>  
                       <td style="text-align: center;">
                          <select class="form-select" name="absence" >
                                <option value="" selected disabled="true">Choisir : </option> 
                                @if($absence->absence == 'absence')
                                    <option value="{{$absence->absence}}" selected> {{$absence->absence}} </option> 
                                    <option value="retard"> Retard </option> 
                                    @else
                                    <option value="{{$absence->absence}}" selected> {{$absence->absence}} </option>                         
                                    <option value="absence"> Absence </option> 
                                @endif   
                          </select>
                       </td> 
                       <td style="text-align: center;">
                          <select class="form-select" name="justification" >
                                <option value="" selected disabled="true">Choisir : </option>  
                                @if($absence->justification == 'oui')
                                    <option value="{{$absence->justification}}" selected> {{$absence->justification}} </option> 
                                    <option value="non"> Non </option> 
                                    @else
                                    <option value="{{$absence->justification}}" selected> {{$absence->justification}} </option>              
                                    <option value="oui"> Oui </option> 
                                @endif   
                          </select>
                       </td>                     
                       <td style="text-align: center;">                      
                        <textarea class="form-control" rows="3" name="observation">{{ $absence->observation}}</textarea>
                      </td>  
                    </tr>
                  </tbody>  
            </table>
 
          </div> 
          <div class="row">
            <div class="col-lg-12">
                <input type="submit" class="btn btn-info" value="Valider">
            </div>
          </div>
        </form>    
                
        </div>
 
      </div>
    </div>
</div>
  
@endsection