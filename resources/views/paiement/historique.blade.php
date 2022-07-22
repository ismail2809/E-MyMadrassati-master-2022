@extends('backend.master')

@section('title','Historique paiement')
@section('content')  

<h4 class="h4 mb-3">
<a href="{{url('/paiements')}}" title="Retour">
  <i class="align-middle me-2" data-feather="arrow-left-circle"></i>  
</a> 
     <strong>  Retour </strong>
</h4>          

<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header" style="background-color:#207CF3;"> 
          <h5 class="card-title mb-0" style="color: white;"><strong> Historique paiement </strong> </h5>  
        </div>
        <div class="card-body">
          <div class="row"> 

                <div class="col-sm-3">
                  <p class="text-muted">Catégorie : </p>
                </div>

                <div class="col-sm-3">
                     <strong> {{ $response->classes->categories->titre }} </strong> 
                </div>
  
                <div class="col-sm-3">
                  <p class="text-muted">Niveau : </p>
                </div>

                <div class="col-sm-3">
                     <strong> {{ $response->classes->niveaus->titre }}</strong>
                </div> 

                <div class="col-sm-3">
                  <p class="text-muted">Classe : </p>
                </div>

                <div class="col-sm-3">
                     <strong> {{ $response->classes->titre }}</strong>
                </div>

                <div class="col-sm-3">
                  <p class="text-muted">Année scolaire : </p>
                </div>

                <div class="col-sm-3">
                     <strong> {{ $response->années->titre }}</strong>
                </div>
                
          </div> 

          <div class="row">  
                <div class="col-sm-3">
                  <p class="text-muted">Etudiant : </p>
                </div>

                <div class="col-sm-3">
                     <strong>{{ $response->etudiants->users->prenom }} {{ $response->etudiants->users->nom }}</strong>
                </div>
          </div> 
         <hr>
          <div class="row">
            <table id="ordering" class="table table-striped table-bordered nowrap" style="width:100%">
                  <thead>
                    <tr> 
                      <th style="text-align: center;">ID</th>  
                      <th style="text-align: center;">Type tarif</th> 
                      <th style="text-align: center;">Versement</th>  
                      <th style="text-align: center;">Mois</th>  
                      <th style="text-align: center;">Date</th>  
                      <th style="text-align: center;">Actions</th> 
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($historiques as $historique)
                    <tr>
                     <td style="text-align: center;">{{ $historique->id }}</td>      
                     <td style="text-align: center;">{{ $historique->type_paiements->titre  }}</td>                 
                     <td style="text-align: center;">{{ $historique->versement }}</td>                
                     <td style="text-align: center;">{{ $historique->mois }}</td>         
                     <td style="text-align: center;">{{ $historique->created_at->format('H:m | d-M-Y') }}</td>    
                     <td style="text-align: center;">
                         <div class="dropdown">
                            <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                              <i class="align-middle" data-feather="more-vertical"></i>   
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                              <li style="text-align: center;">
                                <a class="dropdown-item" href="{{url('/attestation_paiement/'.$historique->etudiant_id)}}" title="Imprimer"><i class="align-middle me-2" data-feather="printer"></i> 
                                </a>
                              </li>
                              <li style="text-align: center;">
                                <a class="dropdown-item" href="{{url('/paiement/'.$historique->id.'/détail')}}" title="Détail"><i class="align-middle me-2" data-feather="eye"></i> 
                                </a>
                              </li>
                              <li style="text-align: center;">
                                <a class="dropdown-item" href="{{url('/paiement/'.$historique->id.'/edit')}}" title="Modifier"><i class="align-middle me-2" data-feather="edit"></i> 
                                </a>
                              </li>
                              <li style="text-align: center;">
                                <form  action="{{url('/paiement/'.$historique->id)}}" method="post">
                                    {{csrf_field()}}
                                    {{method_field('DELETE')}}
                                    <button type="submit"  class="dropdown-item btn btn-sm btn-lg" title="Suprimer">
                                    <i class="align-middle" data-feather="trash-2"></i>   </button>
                                 </form>  
                              </li>
                            </ul>
                          </div>
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