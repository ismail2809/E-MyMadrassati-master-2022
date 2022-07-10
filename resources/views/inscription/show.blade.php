@extends('backend.master')

@section('title','Détail inscriptions')
@section('content') 
   
<h4 class="h4 mb-3">
<a href="{{url('/inscriptions/')}}" title="Retour">
  <i class="align-middle me-2" data-feather="arrow-left-circle"></i>  
</a> 
     <strong>Détail Inscription </strong>
</h4> 

<div class="row">
    <div class="col-12 col-lg-6">
      <div class="card">
        <div class="card-header" style="background-color:#207CF3;">
          <h5 class="card-title mb-0" style="color: white;">Les informations de base</h5>
        </div>
        <div class="card-body"> 
            <div class="row">
                <div class="col-sm-6">
                  <p class="text-muted">Numéro inscription : </p>
                </div>

                <div class="col-sm-6">
                     <strong> {{ $detail['inscription']['num_inscription'] }}</strong>
                </div>

                <div class="col-sm-6">
                  <p class="text-muted">Prénom Nom : </p>
                </div>

                <div class="col-sm-6">
                     <strong> {{ $detail['user']['prenom'] }}</strong>&nbsp;&nbsp;<strong> {{ $detail['user']['nom'] }}</strong> 
                </div>

                <div class="col-sm-6">
                  <p class="text-muted">Email : </p>
                </div>

                <div class="col-sm-6">
                     <strong> {{ $detail['user']['email'] }}</strong>
                </div>

                <div class="col-sm-6">
                  <p class="text-muted">Date de naissance : </p>
                </div>

                <div class="col-sm-6">
                     <strong> {{ $detail['user']['ddn'] }}</strong>
                </div>

                <div class="col-sm-6">
                  <p class="text-muted">Lieu de naissance : </p>
                </div>

                <div class="col-sm-6">
                     <strong> {{ $detail['user']['lieu_naissance'] }}</strong>
                </div>

                <div class="col-sm-6">
                  <p class="text-muted">Sexe : </p>
                </div>

                <div class="col-sm-6">
                     <strong> {{ $detail['user']['sexe'] }}</strong>
                </div>

                <div class="col-sm-6">
                  <p class="text-muted">Adresse : </p>
                </div>

                <div class="col-sm-6">
                     <strong> {{ $detail['user']['adresse'] }}</strong>
                </div>

                <div class="col-sm-6">
                  <p class="text-muted">Role : </p>
                </div>

                <div class="col-sm-6">
                     <strong> {{ $detail['user']['role'] }}</strong>
                </div>

                <div class="col-sm-6">
                  <p class="text-muted">Création : </p>
                </div>

                <div class="col-sm-6">
                     <strong> {{ $detail['user']['created_at'] }}</strong>
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
                <div class="col-sm-6">
                  <p class="text-muted">Année scolaire : </p>
                </div>

                <div class="col-sm-6">
                     <strong> {{ $detail['annee']['titre'] }}</strong>
                </div>

                <div class="col-sm-6">
                  <p class="text-muted">Classe : </p>
                </div>

                <div class="col-sm-6">
                     <strong> {{ $detail['classe']['titre'] }}</strong>
                </div>

                <div class="col-sm-6">
                  <p class="text-muted">Niveau : </p>
                </div>

                <div class="col-sm-6">
                     <strong>  {{ $detail['classe']['niveaus']['titre'] }}</strong>
                </div>

                <div class="col-sm-6">
                  <p class="text-muted">Catégorie : </p>
                </div>

                <div class="col-sm-6">
                     <strong> {{ $detail['classe']['categories']['titre'] }}</strong>
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

                <div class="col-sm-6">
                  <p class="text-muted">Modalité : </p>
                </div>

                <div class="col-sm-6">
                    <strong> {{ $detail['inscription']['modalité'] }}</strong>
                </div>

                <div class="col-sm-6">
                  <p class="text-muted">Tarif : </p>
                </div>

                <div class="col-sm-6">
                    <strong> {{ $detail['inscription']['tarif'] }}</strong>
                </div>

                <div class="col-sm-6">
                  <p class="text-muted">Transport : </p>
                </div>

                <div class="col-sm-6">
                    <strong> {{ $detail['inscription']['transport'] }}</strong>
                </div>

                <div class="col-sm-6">
                  <p class="text-muted">Cantine : </p>
                </div>

                <div class="col-sm-6">
                    <strong> {{ $detail['inscription']['cantine'] }}</strong>
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
                <div class="col-sm-6">
                  <p class="text-muted">Prénom Nom : </p>
                </div>

                <div class="col-sm-6">
                    <strong> {{ $detail['etudiant']['prenom_tuteur'] }}</strong>&nbsp;&nbsp;<strong> {{ $detail['etudiant']['nom_tuteur'] }}</strong> 
                </div>

                <div class="col-sm-6">
                  <p class="text-muted">Téléphone : </p>
                </div>

                <div class="col-sm-6">
                     <strong> {{ $detail['etudiant']['tel_tuteur'] }}</strong>
                </div>
                
                <div class="col-sm-6">
                  <p class="text-muted">Email : </p>
                </div>

                <div class="col-sm-6">
                     <strong> {{ $detail['etudiant']['email_tuteur'] }}</strong>
                </div>
                
                <div class="col-sm-6">
                  <p class="text-muted">Sexe : </p>
                </div>

                <div class="col-sm-6">
                     <strong> {{ $detail['etudiant']['sexe_tuteur'] }}</strong>
                </div>
                
                <div class="col-sm-6">
                  <p class="text-muted">Profession : </p>
                </div>

                <div class="col-sm-6">
                     <strong> {{ $detail['etudiant']['profession_tuteur'] }}</strong>
                </div> 
            </div> 
        </div>
      </div>
    </div> 
</div>
@endsection