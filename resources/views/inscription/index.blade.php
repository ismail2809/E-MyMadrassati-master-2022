@extends('backend.master')

@section('title','Les inscriptions')
@section('content') 
   
<h4 class="h4 mb-3">
 <a href="{{url('/inscription/new')}}" title="Retour">
<i class="align-middle me-2" data-feather="plus-circle"></i>  Nouvelle
</a> 
</h4>

<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header" style="background-color:#207CF3;">
          <h5 class="card-title mb-0" style="color: white;"><strong>Les inscriptions </strong></h5>
        </div>
        <div class="card-body">

          <table id="example" class="table table-striped" style="width:100%">
                <thead>
                    <tr>
                      <th style="color: red"><b>Numero d'inscription</b></th>
                      <th style="color: red"><b>Prénom Nom</b></th> 
                      <th style="color: red"><b>Classe</b></th>
                      <th style="color: red"><b>Tarif</b></th>
                      <th style="color: red"><b>Année</b></th>    
                      <th style="color: red"><b>Détails</b></th>   
                    </tr>
                </thead>
                <tbody>
                    
                    @foreach($inscriptions as $inscription)
                        <tr>
                          <td>{{ $inscription->num_inscription }}</td> 
                          <td>{{ $inscription->etudiants->users->prenom }} {{ $inscription->etudiants->users->nom }}</td> 
                          <td>{{ $inscription->classes->titre }}</td> 
                          <td>{{ $inscription->tarif }}</td> 
                          <td>{{ $inscription->années->titre }}</td>  
                          <td>
                            <a href="{{url('/inscription/'.$inscription->id)}}" title="détail"><i class="align-middle me-2" data-feather="folder"></i>  
                            </a> 
                            <a href="{{url('/inscription/'.$inscription->id.'/edit')}}" title="modifier" style="color:orange;"><i class="align-middle me-2" data-feather="edit"></i>  
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
  
@endsection