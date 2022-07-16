@extends('backend.master')

@section('title','Modifier note') 
@section('content')  

<h4 class="h4 mb-3">
<a href="{{url('/liste_notes')}}" title="Retour">
  <i class="align-middle me-2" data-feather="arrow-left-circle"></i>  
</a> 
     <strong>  Retour </strong>
</h4>        

<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header" style="background-color:#207CF3;"> 
          <h5 class="card-title mb-0" style="color: white;"><strong> Modifier note </strong>   
        </div>
        <div class="card-body">
        <form method="post" action="{{url('/note/'.$note->id.'/update')}}" class="form-horizontal">         
        {{ csrf_field() }}  
         <input type="hidden" name="_method" value="PUT">
        <input type="hidden" name="etudiant_id" value="{{$note->etudiants->id}}">

        <div class="row"> 

                <div class="col-sm-3">
                  <p class="text-muted">Catégorie : </p>
                </div>

                <div class="col-sm-3">
                     <strong> {{ $note->classes->categories->titre }} </strong> 
                </div>

                <div class="col-sm-3">
                  <p class="text-muted">Année scolaire : </p>
                </div>

                <div class="col-sm-3">
                     <strong> {{ $note->années->titre }}</strong>
                </div>
  
                <div class="col-sm-3">
                  <p class="text-muted">Niveau : </p>
                </div>

                <div class="col-sm-3">
                     <strong> {{ $note->classes->niveaus->titre }}</strong>
                </div>
         
                <div class="col-sm-2">
                  <p class="text-muted">Semestre : </p>
                </div>

                <div class="col-sm-4">
                     <select class="form-select" name="semestre" >
                                <option value="" selected disabled="true">Choisir : </option>
                                @if($note->semestre == 'semestre1') 
                                <option value="semestre1" selected> Semestre 1</option>  
                                <option value="semestre2"> Semestre 2</option> 
                                <option value="semestre3"> Semestre 3</option> 
                                @elseif($note->semestre == 'semestre2')
                                <option value="semestre1"> Semestre 1</option>                             
                                <option value="semestre2" selected> Semestre 2</option>  
                                <option value="semestre3"> Semestre 3</option> 
                                @elseif($note->semestre == 'semestre3') 
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
                     <strong> {{ $note->classes->titre }}</strong>
                </div>
          
                <div class="col-sm-2">
                  <p class="text-muted">Matière : </p>
                </div>

                <div class="col-sm-4"> 
                     <select class="form-select" name="matiere_id" >
                        <option value="" selected disabled="true">Choisir : </option>
                        @foreach($matieres as $matiere)  
                          @if($note->matiere_id == $matiere->id)
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
                     <strong>{{ $note->etudiants->users->prenom }} {{ $note->etudiants->users->nom }}</strong>
                </div>

                <div class="col-sm-2">
                  <p class="text-muted"> Professeur: </p>
                </div>

                <div class="col-sm-4"> 
                  <select class="form-select" name="professeur_id" >
                        <option value="" selected disabled="true">Choisir : </option>
                        @foreach($professeurs as $professeur)  
                          @if($note->professeur_id == $professeur->id)
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
                     <input type="date" class="form-control" name="date" value="{{ $note->date }}">
                </div>
          </div>  
         <hr>
        
          <div class="row">
            <table id="nosearching" class="table table-striped table-bordered nowrap" style="width:100%">
                <thead> 
                   <tr> 
                    <th style="text-align: center;"><b>Note</b></th> 
                    <th style="text-align: center;"><b>Coefficient</b></th> 
                    <th style="text-align: center;"><b>Observation</b></th>  
                   </tr> 
                </thead> 
                <tbody> 

                  <tr> 
                   <td style="text-align: center;">
                        <input type="number" class="form-control" placeholder="Note" name="note" value="{{ $note->note}}">
                   </td>   
                   <td style="text-align: center;">
                        <input type="number" class="form-control" placeholder="Coefficient" name="coefficient" value="{{ $note->coefficient}}">
                   </td>   
                   <td style="text-align: center;">                      
                    <textarea class="form-control" rows="3" name="observation" placeholder="Observation">{{ $note->observation}}</textarea>
                  </td>  
                  </tr>       

                </tbody>
                <tfoot>
                  <tr> 
                    <td>
                    </td>
                    <td>
                    </td><td style="text-align:right ;"><input type="submit" class="btn btn-info" value="Valider"></td>
                </tr>
                </tfoot>
            </table>
 
          </div> 

        </form>    
                
        </div>
 
      </div>
    </div>
</div>
  
@endsection