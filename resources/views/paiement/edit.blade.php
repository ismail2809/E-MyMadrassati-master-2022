@extends('backend.master')

@section('title','Modifier paiement') 
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
          <h5 class="card-title mb-0" style="color: white;"><strong> Modifier paiement </strong>   
        </div>
        <div class="card-body">


        <form method="post" action="{{url('/paiement/'.$paiement->id.'/update')}}" class="form-horizontal">         
        {{ csrf_field() }}  
         <input type="hidden" name="_method" value="PUT">
         
        <div class="row"> 

                <div class="col-sm-3">
                  <p class="text-muted">Catégorie : </p>
                </div>

                <div class="col-sm-3">
                     <strong>{{ $response->classes->categories->titre }} </strong> 
                </div>
  
                <div class="col-sm-3">
                  <p class="text-muted">Niveau : </p>
                </div>

                <div class="col-sm-3">
                     <strong>{{ $response->classes->niveaus->titre }}</strong>
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
                     <strong>{{ $paiement->années->titre }}</strong>
                </div>

                <div class="row">

                <div class="col-sm-3">
                  <p class="text-muted">Etudiant : </p>
                </div>

                <div class="col-sm-9">
                     <strong>{{ $paiement->etudiants->users->prenom }} {{ $paiement->etudiants->users->nom }}</strong>

                </div>

                </div> 

                <div class="row">

                    <div class="col-sm-3">
                      <p class="text-muted">Modalité : </p>
                    </div>

                    <div class="col-sm-3">
                         <strong> {{ $response->modalité }}</strong>
                    </div>  

                    <div class="col-sm-3">
                      <p class="text-muted">Tarif : </p>
                    </div>

                    <div class="col-sm-3">
                         <strong> {{ $response->tarif }}</strong>
                    </div>  

                    <div class="col-sm-3">
                      <p class="text-muted">Transport : </p>
                    </div>

                    <div class="col-sm-3">
                         <strong> {{ $response->transport }}</strong>
                    </div>  

                    <div class="col-sm-3">
                      <p class="text-muted">Cantine : </p>
                    </div>

                    <div class="col-sm-3">
                         <strong> {{ $response->cantine }}</strong>
                    </div> 

                </div> 


          </div> 
         <hr>


        <div class="row">
            <table id="nosearching" class="table table-striped table-bordered nowrap" style="width:100%">
                  <thead>
                    <tr>
                      <tr> 
                      <th style="text-align: center;">ID</th>  
                      <th style="text-align: center;">Type tarif</th> 
                      <th style="text-align: center;">Versement</th> 
                      <th style="text-align: center;">Mode </th> 
                      <th style="text-align: center;">Mois</th> 
                      <th style="text-align: center;">Description</th>   
                    </tr>
                  </thead>
                <tbody>
                    <tr> 
                        <td style="text-align: center;">{{ $paiement->id}}  
                             <input type="hidden" name="etudiant_id" value="">     
                        </td>  
                        <td style="text-align: center;">
                          <select class="form-select mb-3" name="type_paiement_id" title="Type" > 
                                <option selected  disabled="true">Choisir : </option> 
                            @foreach($type_paiements as $type_paiement)
                                <option value="{{ $type_paiement->id }}" {{ $type_paiement->id == $paiement->type_paiement_id ? 'selected' : '' }}> {{ $type_paiement->titre}} => {{ $type_paiement->montant}} </option> 
                            @endforeach      
                            </select>
                        </td>  
                        <td style="text-align: center;">
                          <input type="number" class="form-control mb-3" placeholder="Versement" name="versement" value="{{ $paiement->versement}}">
                        </td>  
                        <td style="text-align: center;">
                            <select class="form-select mb-3" name="mois" title="Mois" > 
                                  <option selected  disabled="true">Choisir : </option>     
                                  <option value="01" {{ $paiement->mois == "01" ? 'selected' : '' }}> Janvier </option>  
                                  <option value="02" {{ $paiement->mois == "02" ? 'selected' : '' }}> Février </option>  
                                  <option value="03" {{ $paiement->mois == "03" ? 'selected' : '' }}> Mars </option>  
                                  <option value="04" {{ $paiement->mois == "04" ? 'selected' : '' }}> Avril </option>  
                                  <option value="05" {{ $paiement->mois == "05" ? 'selected' : '' }}> Mai </option>  
                                  <option value="06" {{ $paiement->mois == "06" ? 'selected' : '' }}> Juin </option>  
                                  <option value="07" {{ $paiement->mois == "07" ? 'selected' : '' }}> Juillet</option>  
                                  <option value="08" {{ $paiement->mois == "08" ? 'selected' : '' }}> Aout </option>  
                                  <option value="09" {{ $paiement->mois == "09" ? 'selected' : '' }}> Septembre </option>  
                                  <option value="10" {{ $paiement->mois == "10" ? 'selected' : '' }}> Octobre </option>  
                                  <option value="11" {{ $paiement->mois == "11" ? 'selected' : '' }}> Novembre </option>  
                                  <option value="12" {{ $paiement->mois == "12" ? 'selected' : '' }}> Décembre </option> 
                            </select>
                        </td> 
                        <td style="text-align: center;">
                            <select class="form-select mb-3" name="mode" title="Mode" > 
                                  <option selected  disabled="true">Choisir : </option>  
                                  <option value="liquide" {{ $paiement->mode == "liquide" ? 'selected' : '' }}>Liquide</option>
                                  <option value="cheque" {{ $paiement->mode == "cheque" ? 'selected' : '' }}>Chèque</option> 
                                  <option value="cb" {{ $paiement->mode == "cb" ? 'selected' : '' }}>Carte bancaire</option> 
                            </select>
                        </td> 
                         <td style="text-align: center;">                      
                            <textarea class="form-control" rows="3" name="description">{{ $paiement->description}}</textarea>
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