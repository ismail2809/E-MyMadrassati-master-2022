@extends('back.master')
@section('title','Absence des étudiants')

@section('content') 
 
<div class="row justify-content-center">

   <div class="col-md-12">
      <div class="card">

        <div class="card-header card-header-icon card-header-info">
          <div class="card-icon">
            <i class="material-icons">assignment</i>
          </div>
          <h4 class="card-title ">Absence des étudiants</h4>
        </div>

        <div class="card-body">

          <form action="{{url('/absence')}}" method="post">
              {{ csrf_field() }} 

          <div class="row">
            <div class="col-md-3">
                <div class="form-group select-wizard">
                    <select class="selectpicker" data-size="7" data-style="select-with-transition" name="matiere_id" title="Matière"> 
                      @foreach($matieres as $matiere)
                          <option value="{{ $matiere->id }}"> {{ $matiere->titre}} </option> 
                          @endforeach 
                    </select>
                </div>
            </div> 
          </div>

          <div class="table-responsive">
            <table class="table">
              <thead class="text-danger" style="text-align: center;">
                <th>
                </th>
                <th>
                  Nom complet
                </th>
                <th>
                  ABSENCE / RETARD
                </th>
                <th>
                  DÉBUT SCÉANCE 
                </th>
                <th>
                   FIN SCÉANCE
                </th>
                <th>
                  OBSERVATION
                </th>  
              </thead>
              <tbody>
              @foreach($etudiants[0] as $etudiant)
                <tr style="text-align: center;">
                  <td>
                    <div class="img-container" style="width: 50px;">
                      <img src="{{ asset('back/assets/img/product1.jpg') }}" alt="...">
                    </div>
                  </td>
                  <td class="td-name">                     
                      {{ $etudiant['etudiants']['users']['prenom'] }} {{ $etudiant['etudiants']['users']['nom'] }} 
                      <input type="hidden" name="etudiant_id[]" value="{{ $etudiant['etudiant_id'] }}">                
                  </td>
                  <td>
                    <select class="selectpicker" data-size="7" data-style="select-with-transition" name="absence[]" title="Choisir"> 
                     <option value="Absence"> Absence </option>
                       <option value="Retartd"> Retartd </option> 
                  </select>
                  </td>
                  <td>
                    <input type="time" name="debutseance[]" class="form-control">
                  </td>
                  <td>
                    <input type="time" name="finseance[]" class="form-control">
                  </td> 
                  <td class="td-text">
                    <textarea class="form-control" rows="2" name="observation[]" placeholder="Ecrire ici votre observation"></textarea>   
                  </td> 
              </tr>  

              <input type="hidden" name="année_id[]"   value="{{ $etudiant['années']['id'] }}">                      
              <input type="hidden" name="classe_id[]"  value="{{ $etudiant['classes']['id'] }}">                       
              <input type="hidden" name="professeur_id[]"  value="1">

              @endforeach

              <tr>
                <td colspan="2"></td>
                <td colspan="2"></td>
                <td colspan="2" class="text-right">
                  <button type="submit" class="btn btn-info btn-round">Valider <i class="material-icons">done</i></button>
                </td>
              </tr>

              </tbody>
            </table>            
          </div>

          </form>

        </div>

      </div>
    </div>

</div>	

@endsection