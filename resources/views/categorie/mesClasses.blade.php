@extends('back.master')
@section('title','Mes Classes')

@section('content') 
 
<div class="row justify-content-center">

	     <div class="col-md-12">
                <div class="card">
                  <div class="card-header card-header-icon card-header-info">
                    <div class="card-icon">
                      <i class="material-icons">assignment</i>
                    </div>
                    <h4 class="card-title ">Les classes</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table">
                        <thead class="text-danger" style="text-align: center;">
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
                            Nombre des etudiants
                          </th>
                          <th>
                            Année scolaire
                          </th> 
                          <th>
                          	  Voir
                          </th>
                          <th>
                              Payement
                          </th>
                          <th>
                            <b>Absence</b>
                          </th>
                          <th>
                            <b>Note</b>
                          </th>                
                        </thead>
                        <tbody>
                       
                        @foreach($classes as $classe)
                       
                          <tr style="text-align: center;">                          	
                            <td>
                              {{ $classe['categories'] }} 
                            </td>
                            <td>
                              {{ $classe['niveau'] }}
                            </td>
                            <td>
                              {{ $classe['classe'] }}
                            </td>
                            <td>
                              {{ $classe['nbrEtudiants'] }}                            	
                            </td> 
                            <td>
                              {{ $classe['année'] }}
                            </td>
                            <td>
                              <a href="{{ url('/classes/'.$classe['id_classe'].'/etudiants') }}" class="btn btn-primary btn-round"><i class="material-icons">remove_red_eye</i></a>
                            </td>  
                            <td>
                              <a href="{{ url('/payments/'.$classe['id_classe'].'/etudiants') }}" class="btn btn-info btn-round" title="cliquez ici  pour marquer l'absence">
                                <i class="material-icons">euro</i></a>
                            </td>                            
                            <td>
                              <a href="{{ url('/absences/'.$classe['id_classe'].'/etudiants') }}" class="btn btn-warning btn-round" title="cliquez ici  pour marquer l'absence">
                                <i class="material-icons">access_time</i></a>
                            </td>
                            <td>
                              <a href="{{url('/notes/'.$classe['id_classe'].'/etudiants')}}" class="btn btn-success btn-round" title="cliquez ici pour ajouter une note">
                                <i class="material-icons">create</i></a>
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