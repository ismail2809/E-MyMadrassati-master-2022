@extends('backend.master')

@section('title','Nouvelle paiement | Etudiant')
@section('content')  

<h4 class="h4 mb-3">
<a href="{{url('/paiements/listes_classes')}}" title="Retour">
  <i class="align-middle me-2" data-feather="arrow-left-circle"></i>  
</a> 
     <strong>  Retour </strong>
</h4>        

<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header" style="background-color:#207CF3;"> 
          <h5 class="card-title mb-0" style="color: white;"><strong> Nouvelle paiement </strong>| Etudiant </h5>
        </div>
        <div class="card-body">
			
			 <form method="post" action="{{url('/paiement')}}" enctype="multipart/form-data" >
        {{ csrf_field() }}   
	        <div class="row"> 

                <div class="col-sm-3">
                  <p class="text-muted">Catégorie : </p>
                </div>

                <div class="col-sm-3">
                     <strong> {{ $etudiants->classes->categories->titre }} </strong> 
                </div>
  
                <div class="col-sm-3">
                  <p class="text-muted">Niveau : </p>
                </div>

                <div class="col-sm-3">
                     <strong> {{ $etudiants->classes->niveaus->titre }}</strong>
                </div> 

                <div class="col-sm-3">
                  <p class="text-muted">Classe : </p>
                </div>

                <div class="col-sm-3">
                     <strong> {{ $etudiants->classes->titre }}</strong>
                </div>  
          </div> 


          <div class="row"> 

                <div class="col-sm-3">
                  <p class="text-muted">Etudiant : </p>
                </div>

                <div class="col-sm-3">
                     <strong>{{ $etudiants->etudiants->users->prenom }} {{ $etudiants->etudiants->users->nom }}</strong>
                      <input type="hidden" name="etudiant_id" value="{{$etudiants->etudiants->id}}"> 
                </div>

                <div class="col-sm-3">
                  <p class="text-muted">Modalité : </p>
                </div>

                <div class="col-sm-3">
                     <strong> {{ $etudiants->modalité }}</strong>
                </div> 

                <div class="col-sm-3">
                  <p class="text-muted">Tarif : </p>
                </div>

                <div class="col-sm-3">
                     <strong> {{ $etudiants->tarif }}</strong>
                </div> 

                <div class="col-sm-3">
                  <p class="text-muted">Cantine : </p>
                </div>

                <div class="col-sm-3">
                     <strong> {{ $etudiants->cantine }}</strong>
                </div> 

                <div class="col-sm-3">
                  <p class="text-muted">Transport : </p>
                </div>

                <div class="col-sm-3">
                     <strong> {{ $etudiants->transport }}</strong>
                </div> 
          </div>


          <div class="row"> 
                <div class="col-sm-3">
                  <p class="text-muted">Année scolaire : </p>
                </div>

                <div class="col-sm-3">
                     <select class="form-select mb-3" name="annee_id" title="Année Scholaire" required> 
                          <option selected  disabled="true">Choisir : </option>                      
                      @foreach($années as $année)
                          <option value="{{ $année->id }}"> {{ $année->titre}} </option> 
                      @endforeach
                      </select>
                </div>
          </div>

         <hr> 

          <div class="row">   

            <div class="col-sm-4">
              <p class="text-muted">Type : </p>
            </div>

            <div class="col-sm-8"> 
                <div> 
                    @foreach($type_paiements as $type_paiement) 
                      <label class="form-check">
                          <input class="form-check-input" name="type_paiement_id[]" title="Type" type="checkbox" value="{{ $type_paiement->id }}">
                          <span class="form-check-label">
                             {{ $type_paiement->titre}} => {{ $type_paiement->montant}} 
                          </span>
                      </label>
                    @endforeach  
                </div>
            </div>            

            <hr>
            
            <div class="col-sm-4">
              <p class="text-muted">Versement : </p>
            </div>

            <div class="col-sm-8">
                 <input type="number" class="form-control mb-3" placeholder="Versement" name="versement"   required>
            </div> 

            <div class="col-sm-4">
              <p class="text-muted">Mode : </p>
            </div>

            <div class="col-sm-8">
                 <select class="form-select mb-3" name="mode" title="Mode" required> 
                      <option selected  disabled="true">Choisir : </option>                      
                      <option value="liquide">Liquide</option>
                      <option value="cheque">Chèque</option> 
                      <option value="cb">Carte bancaire</option> 
                  </select>
            </div>

            <div class="col-sm-4">
              <p class="text-muted">Mois : </p>
            </div>

            <div class="col-sm-8">
                 <select class="form-select mb-3" name="mois" title="Mois" required> 
                      <option selected  disabled="true">Choisir : </option>                      
                      <option value="01"> Janvier </option>  
                      <option value="02"> Février </option>  
                      <option value="03"> Mars </option>  
                      <option value="04"> Avril </option>  
                      <option value="05"> Mai </option>  
                      <option value="06"> Juin </option>  
                      <option value="07"> Juillet</option>  
                      <option value="08"> Aout </option>  
                      <option value="09"> Septembre </option>  
                      <option value="10"> Octobre </option>  
                      <option value="11"> Novembre </option>  
                      <option value="12"> Décembre </option> 
                  </select>
            </div>

            <div class="col-sm-4">
              <p class="text-muted">Description : </p>
            </div>

            <div class="col-sm-8">
                <textarea class="form-control mb-3" rows="7" name="description" placeholder="Description"></textarea>
            </div> 

            <div class="col-sm-12">
                <input type="submit" class="btn btn-info" value="Valider">
            </div>

          </div> 
       	
       	</form>
        <hr>
          <div class="row">
            <div class="col-sm-12">
                   <h2 class="card-title mb-3" style="color: black;"><strong> Historique paiement </strong> </h2>
            </div>
         

            <table id="ordering" class="table table-striped table-bordered nowrap" style="width:100%">
                  <thead>
                    <tr> 
                      <th style="text-align: center;">ID</th>  
                      <th style="text-align: center;">Type tarif</th> 
                      <th style="text-align: center;">Versement</th> 
                      <th style="text-align: center;">Mode </th> 
                      <th style="text-align: center;">Mois</th> 
                      <th style="text-align: center;">Description</th>  
                      <th style="text-align: center;">Date</th>  
                      <th style="text-align: center;">Modifier</th>
                      <th style="text-align: center;">Supprimer</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($historiques as $historique)
                    <tr>
                     <td style="text-align: center;">#{{ $historique->id }}</td>      
                     <td style="text-align: center;">{{ $historique->type_paiements->titre  }}</td>                 
                     <td style="text-align: center;">{{ $historique->versement }}</td>                 
                     <td style="text-align: center;">{{ $historique->mode }}</td>                 
                     <td style="text-align: center;">{{ $historique->mois }}</td>                       
                     <td style="text-align: center;">{{ $historique->description }}</td>
                     <td style="text-align: center;">{{ $historique->created_at->format('H:m | d-M-Y') }}</td> 

                     <td style="text-align: center;">
                        <a href="{{url('/paiement/'.$historique->id.'/edit')}}" title="Modifier">
                          <i class="align-middle me-2" data-feather="edit"></i> 
                        </a> 
                     </td>                      
                      <td style="text-align: center;">
                         <form action="{{url('/paiement/'.$historique->id)}}" method="post">
                            {{csrf_field()}}
                            {{method_field('DELETE')}}
                            <button type="submit"  class="btn btn-danger btn-sm" title="Suprimer">
                            <i class="align-middle" data-feather="trash-2"></i>   
                         </form>  
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