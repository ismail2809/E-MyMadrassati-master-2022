@extends('backend.master')

@section('title','Détail paiement')
@section('content')  

<h4 class="h4 mb-3">
<a href="{{url('/liste_paiements')}}" title="Retour">
  <i class="align-middle me-2" data-feather="arrow-left-circle"></i>  
</a> 
     <strong>  Retour </strong>
</h4>        

<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header" style="background-color:#207CF3;"> 
          <h5 class="card-title mb-0" style="color: white;"><strong> Détail paiement </strong> </h5>  
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
                  <p class="text-muted">Année scolaire : </p>
                </div>

                <div class="col-sm-3">
                     <strong> {{ $paiement->années->titre }}</strong>
                </div>
  
                <div class="col-sm-3">
                  <p class="text-muted">Niveau : </p>
                </div>

                <div class="col-sm-3">
                     <strong> {{ $response->classes->niveaus->titre }}</strong>
                </div> 

                <div class="col-sm-3">
                  <p class="text-muted">Etudiant : </p>
                </div>

                <div class="col-sm-3">
                     <strong>{{ $paiement->etudiants->users->prenom }} {{ $paiement->etudiants->users->nom }}</strong>

         </div>

         <div class="row">

                <div class="col-sm-3">
                  <p class="text-muted">Classe : </p>
                </div>

                <div class="col-sm-3">
                     <strong> {{ $response->classes->titre }}</strong>
                </div> 
                </div> 
          </div> 
         <hr>
          <div class="row">
            <table id="nosearching" class="table table-striped table-bordered nowrap" style="width:100%">
                  <thead>
                    <tr> 
                      <th style="text-align: center;">ID</th>  
                      <th style="text-align: center;">Type tarif</th> 
                      <th style="text-align: center;">Versement</th> 
                      <th style="text-align: center;">Mode </th> 
                      <th style="text-align: center;">Mois</th> 
                      <th style="text-align: center;">Description</th>  
                      <th style="text-align: center;">Modifier</th>
                      <th style="text-align: center;">Supprimer</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                     <td style="text-align: center;">{{ $paiement->id }}</th>      
                     <td style="text-align: center;">{{ $paiement->type_paiements->titre  }}</th>                 
                     <td style="text-align: center;">{{ $paiement->versement }}</th>                 
                     <td style="text-align: center;">{{ $paiement->mode }}</th>                 
                     <td style="text-align: center;">{{ $paiement->mois }}</th>                       
                     <td style="text-align: center;">{{ $paiement->description }}</th>  
                      <td style="text-align: center;">
                        <a href="{{url('/paiement/'.$paiement->id.'/edit')}}" title="Modifier">
                          <i class="align-middle me-2" data-feather="edit"></i> 
                        </a> 
                     </td>                      
                      <td style="text-align: center;">
                         <form action="{{url('/paiement/'.$paiement->id)}}" method="post">
                            {{csrf_field()}}
                            {{method_field('DELETE')}}
                            <button type="submit"  class="btn btn-danger" title="Suprimer">
                            <i class="align-middle" data-feather="delete"></i>  
                         </form>  
                     </td> 
                    </tr>
                  </tbody>
            </table>
 
          </div> 

        </div>
 
      </div>
    </div>
</div>
  
@endsection