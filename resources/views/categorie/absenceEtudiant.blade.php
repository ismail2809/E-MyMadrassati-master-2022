@extends('back.master')
@section('title','Liste d\'absence de l\'étudiant')

@section('content') 
 
<div class="row justify-content-center">

   <div class="col-md-12">
      <div class="card">

        <div class="card-header card-header-icon card-header-info">
          <div class="card-icon">
            <i class="material-icons">assignment</i>
          </div>
          <h4 class="card-title ">Liste d'absence l'Etudiant</h4>
        </div>

        <div class="card-body"> 
            <div class="material-datatables">

                <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
               <thead class="text-danger" style="text-align: center;">
                 
                <th>
                  Nom complet
                </th>       
                <th> 
                  Matière
                </th>    
                <th> 
                  Absence / Retard
                </th>
                <th> 
                  Date début
                </th>             
                <th> 
                  Date fin
                </th>
                <th> 
                  Observation
                </th> 
                <th>
                  Catégorie
                </th>
                <th>
                  Niveau
                </th>
                <th>
                  Classe
                </th>     
                <th> 
                  Date
                </th> 
                <th>
                  Année scolaire
                </th> 
                <th class="td-actions">
                  Modifier
                </th> 
              </thead>
              <tbody>
              @foreach($absences as $absence)

                <tr style="text-align: center;">
              
                  <td>
                  {{ $absence['etudiants']['users']['prenom'] }} {{ $absence['etudiants']['users']['nom'] }}                               
                  </td>
                  <td>
                    {{ $absence['matieres']['titre'] }}
                  </td>
                  <td>
                    {{ $absence['debutseance'] }}
                  </td>
                  <td>
                    {{ $absence['finseance'] }}
                  </td>
                  <td>
                    {{ $absence['absence'] }}
                  </td>
                  <td>
                    {{ $absence['observation'] }}
                  </td>
                  <td>
                    {{ $absence['classes']['categories']['titre'] }}
                  </td>
                  <td>
                    {{ $absence['classes']['categories']['niveau'] }}
                  </td>
                  <td>
                    {{ $absence['classes']['titre'] }}
                  </td> 
                  <td>
                    {{ $absence['created_at']  }}
                  </td>
                  <td>
                    {{ $absence['années']['titre'] }}
                  </td>  
                  <td class="td-actions">
                    <a href="{{url('/inscription/'.$absence['id'].'/edit')}}" type="button" class="btn btn-warning btn-round" title="Modifier"><i class="material-icons">edit</i> 
                    </a> 
                  </td>

                </tr> 
              @endforeach       

              </tbody>
            </table>
          </div>
        </div>

      </div>
    </div>

</div>	

@endsection