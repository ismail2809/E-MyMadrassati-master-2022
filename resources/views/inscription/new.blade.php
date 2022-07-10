@extends('backend.master')

@section('title','Nouvelle inscription')
@section('content') 
  
<h4 class="h4 mb-3">
<a href="{{url('/inscriptions/')}}" title="Retour">
  <i class="align-middle me-2" data-feather="arrow-left-circle"></i>  
</a> 
     <strong>Nouvelle Inscription </strong>
</h4>        

 <form method="post" action="{{url('/inscription')}}" enctype="multipart/form-data" >
        {{ csrf_field() }} 
<div class="row">
    <div class="col-12 col-lg-6">
      <div class="card">
        <div class="card-header" style="background-color:#207CF3;">
          <h5 class="card-title mb-0" style="color: white;">Les informations de base</h5>
        </div>
        <div class="card-body"> 
            <div class="row">
                <div class="col-sm-4">
                  <p class="text-muted">Numéro inscription:</p>
                </div>

                <div class="col-sm-8">
                   <input type="text" class="form-control mb-3" placeholder="Numéro inscription" name="num_inscription" autocomplete="off" required>
                </div>

                <div class="col-sm-4">
                  <p class="text-muted">Prénom : </p>
                </div>

                <div class="col-sm-8">
                       <input type="text" class="form-control mb-3" placeholder="Prénom" name="prenom" autocomplete="off" required>
                </div>

                <div class="col-sm-4">
                  <p class="text-muted">Nom : </p>
                </div>

                <div class="col-sm-8">
                       <input type="text" class="form-control mb-3" placeholder="Nom" name="nom" autocomplete="off" required>
                </div>

                <div class="col-sm-4">
                  <p class="text-muted">Email : </p>
                </div>

                <div class="col-sm-8">
                     <input type="email" class="form-control mb-3" placeholder="Email" name="email" autocomplete="off" required>
                </div>

                <div class="col-sm-4">
                  <p class="text-muted">Date de naissance : </p>
                </div>

                <div class="col-sm-8">
                     <input type="date" class="form-control mb-3" name="ddn">
                </div>

                <div class="col-sm-4">
                  <p class="text-muted">Lieu de naissance : </p>
                </div>

                <div class="col-sm-8">
                      <input type="text" class="form-control mb-3" name="lieu_naissance" placeholder="Lieu de naissance">
                </div>              

                <div class="col-sm-4">
                  <p class="text-muted">Téléphone : </p>
                </div>

                <div class="col-sm-8">
                     <input type="number" class="form-control mb-3" name="tel" placeholder="Phone">
                </div>


                <div class="col-sm-4">
                  <p class="text-muted">Sexe : </p>
                </div>

                <div class="col-sm-8">
                   <select class="form-select mb-3" name="sexe">
                        <option selected  disabled="true">Choisir : </option>
                        <option value="Homme"> Homme </option>
                        <option value="Femme"> Femme </option> 
                   </select>
                </div>

                <div class="col-sm-4">
                  <p class="text-muted">Adresse : </p>
                </div>

                <div class="col-sm-8">
                      <textarea class="form-control mb-3" rows="7" name="adresse" placeholder="Adresse"></textarea>
                </div> 
            </div>
        </div>
      </div>
    </div>
    <div class="col-12 col-lg-6">
      <div class="card">
        <div class="card-header" style="background-color:orange;">
          <h5 class="card-title mb-0" style="color: white;">Les informations de scolarité</h5>
        </div>
        <div class="card-body">
          <div class="row">
                <div class="col-sm-4">
                  <p class="text-muted">Année scolaire : </p>
                </div>

                <div class="col-sm-8">
                     <select class="form-select mb-3" name="année_id" title="Année Scholaire" required>  
                      @foreach($années as $année)
                          <option value="{{ $année->id }}"> {{ $année->titre}} </option> 
                      @endforeach
                      </select>
                </div>

                <div class="col-sm-4">
                  <p class="text-muted">Classe : </p>
                </div>

                <div class="col-sm-8">
                     <select class="form-select mb-3" name="classe_id" title="Classe" required>  
                      @foreach($classes as $classe)
                          <option value="{{ $classe->id }}"> {{ $classe->titre}} </option> 
                      @endforeach 
                     </select>
                </div>
                  
            </div>

        </div>
      </div>
            
      <div class="card">   

        <div class="card-header" style="background-color:#1cbb8c;">
          <h5 class="card-title mb-0" style="color: white;">Les informations du Payment</h5>
        </div>

        <div class="card-body">
            <div class="row">
                 
                <div class="col-sm-4">
                  <p class="text-muted">Modalité : </p>
                </div>

                <div class="col-sm-8">
                      <select class="form-select mb-3" name="modalité" title="Modalité" required>  
                        <option value="Mensuel"> Mensuel </option>
                        <option value="Trimestriel"> Trimestriel </option> 
                        <option value="Annuel"> Annuel </option>
                      </select> 
                </div>

                <div class="col-sm-4">
                  <p class="text-muted">Tarif : </p>
                </div>

                <div class="col-sm-8">
                    <input type="number" class="form-control mb-3" placeholder="Tarif" name="tarif" required>
                </div>

                <div class="col-sm-4">
                  <p class="text-muted">Transport : </p>
                </div>

                <div class="col-sm-8">
                   <select class="form-select mb-3" name="transport" title="Transport">
                      <option selected  disabled="true">Choisir : </option>                
                      <option value="Oui"> Oui </option>
                      <option value="Non"> Non </option>                         
                    </select>
                </div>

                <div class="col-sm-4">
                  <p class="text-muted">Cantine : </p>
                </div>

                <div class="col-sm-8">
                  <select class="form-select mb-3" name="cantine" title="Cantine">
                    <option selected  disabled="true">Choisir : </option>                
                    <option value="Oui"> Oui </option>
                    <option value="Non"> Non </option>                         
                  </select>
                </div>
          </div>                  
        </div>
        </div>
      </div> 
</div>

<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header" style="background-color:lightslategrey;">
          <h5 class="card-title mb-0" style="color: white;">Les informations du Tuteur</h5>
        </div>
        <div class="card-body">  
            <div class="row">
                <div class="col-sm-4">
                  <p class="text-muted">Prénom : </p>
                </div>

                <div class="col-sm-8">
                    <input type="text" class="form-control mb-3" name="prenom_tuteur" placeholder="Prenom tuteur">
                </div>

                <div class="col-sm-4">
                  <p class="text-muted">Nom : </p>
                </div>

                <div class="col-sm-8">
                    <input type="text" class="form-control mb-3" name="nom_tuteur" placeholder="Nom tuteur">
                </div>

                <div class="col-sm-4">
                  <p class="text-muted">Téléphone : </p>
                </div>

                <div class="col-sm-8">
                    <input type="number" class="form-control mb-3" name="tel_tuteur" placeholder="Téléphone tuteur">
                </div>
                
                <div class="col-sm-4">
                  <p class="text-muted">Email : </p>
                </div>

                <div class="col-sm-8">
                    <input type="email" class="form-control mb-3" name="email_tuteur" placeholder="Email tuteur">
                </div>
                
                <div class="col-sm-4">
                  <p class="text-muted">Sexe : </p>
                </div>

                <div class="col-sm-8">
                  <select class="form-select mb-2" name="sexe_tuteur" title="Sexe">
                      <option selected  disabled="true">Choisir : </option>
                      <option value="Homme"> Homme </option>
                      <option value="Femme"> Femme </option> 
                  </select>
                </div>
                
                <div class="col-sm-4">
                  <p class="text-muted">Profession : </p>
                </div>

                <div class="col-sm-8">
                   <input type="text" class="form-control mb-3" name="profession_tuteur" placeholder="Profession tuteur">
                </div> 
            </div> 
            <div class="row">
              <div class="col-sm-2">
                  <input type="submit" class="btn btn-primary" value="Envoyer">                
              </div>
            </div>
        </div>
      </div>
    </div> 
</div> 


</form>
@endsection        