@extends('backend.master')
@section('title','Profile')

@section('content') 

<div class="container-fluid p-0">

<div class="mb-3">
    <h4 class="h4 mb-3">
      <a href="{{url('/editprofile')}}" title="Editer profile">
        <i class="align-middle me-2" data-feather="edit"></i>  Editer profile
      </a> 
    </h4>
</div>

<div class="row">

  <div class="col-md-12">
         
         <div class="card"> 
            <div class="card-header" style="background-color:#207CF3;">
                <h5 class="card-title mb-0" style="color: white;"><strong>Mes informations </strong></h5>
            </div>
            
            <div class="card-body h-100">
              <div class="row">

                <div class="col-md-2">
                  <p class="text-muted"> Prénom : </p>
                </div>
                <div class="col-md-4">
                 <h6> {{ $user['users']['prenom'] }}</h6>            
                </div>
                
                <div class="col-md-2">
                  <p class="text-muted"> Nom : </p>
                </div>
                <div class="col-md-4">
                 <h6> {{ $user['users']['nom'] }}</h6>            
                </div>          

                <div class="col-md-2">
                  <p class="text-muted"> Email : </p>
                </div>
                <div class="col-md-4">
                 <h6> {{ $user['users']['email'] }}</h6>            
                </div>          

                <div class="col-md-2">
                  <p class="text-muted"> Telephone : </p>
                </div>
                <div class="col-md-4">
                 <h6> {{ $user['users']['tel'] }}</h6>            
                </div>
                
                <div class="col-md-2">
                  <p class="text-muted"> Sexe : </p>
                </div>
                <div class="col-md-4">
                 <h6> {{ $user['users']['sexe'] }}</h6>            
                </div>          
                
                <div class="col-md-2">
                  <p class="text-muted"> Date naissance  : </p>
                </div>
                <div class="col-md-4">
                 <h6> {{ $user['users']['ddn'] }}</h6>            
                </div>
                
                <div class="col-md-2">
                  <p class="text-muted"> Lieu naissance  : </p>
                </div>
                <div class="col-md-4">
                 <h6> {{ $user['users']['lieu_naissance'] }}</h6>            
                </div>    

                <div class="col-md-2">
                  <p class="text-muted"> Role : </p>
                </div>
                <div class="col-md-4">
                 <h6> {{ $user['users']['role'] }}</h6>            
                </div>

                <div class="col-md-2">
                  <p class="text-muted"> Adresse : </p>
                </div>        
                <div class="col-md-10">
                 <h6> {{ $user['users']['adresse'] }}</h6>            
                </div>   
                
              </div>
            </div>
         </div>
          
        @if($user['users']['role'] == "professeur")          
        <div class="card"> 
            <div class="card-header" style="background-color:#207CF3;">
                <h5 class="card-title mb-0" style="color: white;"><strong>Informations professeur</strong></h5>
            </div>
            
            <div class="card-body h-100">
              
              <div class="row">

                <div class="col-md-2">
                  <p class="text-muted"> Cin : </p>
                </div>
                <div class="col-md-4">
                 <h6> {{ $user['users']['cin'] }}</h6>            
                </div>
                
                <div class="col-md-2">
                  <p class="text-muted"> Diplome : </p>
                </div>
                <div class="col-md-4">
                 <h6> {{ $user['users']['diplome'] }}</h6>            
                </div>          

                <div class="col-md-2">
                  <p class="text-muted"> Promo : </p>
                </div>
                <div class="col-md-4">
                 <h6> {{ $user['users']['promo'] }}</h6>            
                </div>          

              </div>
            </div>
        </div>
        @endif


        @if($user['users']['role'] == "etudiant")  
         <div class="card"> 
            <div class="card-header" style="background-color:#207CF3;">
                <h5 class="card-title mb-0" style="color: white;"><strong>Informations Tuteur</strong></h5>
            </div>
            
            <div class="card-body h-100">      
              <div class="row">

                <div class="col-md-2">
                  <p class="text-muted">  Prénom : </p>
                </div>
                <div class="col-md-4">
                 <h6> {{ $user['prenom_tuteur'] }}</h6>            
                </div>

                <div class="col-md-2">
                  <p class="text-muted">  Nom : </p>
                </div>
                <div class="col-md-4">
                 <h6> {{ $user['nom_tuteur'] }}</h6>            
                </div>
                
                <div class="col-md-2">
                  <p class="text-muted"> Telephone : </p>
                </div>
                <div class="col-md-4">
                 <h6> {{ $user['tel_tuteur'] }}</h6>            
                </div>          

                <div class="col-md-2">
                  <p class="text-muted"> Email : </p>
                </div>
                <div class="col-md-4">
                 <h6> {{ $user['email_tuteur'] }}</h6>            
                </div>          
                
                <div class="col-md-2">
                  <p class="text-muted"> Sexe : </p>
                </div>
                <div class="col-md-4">
                 <h6> {{ $user['sexe_tuteur'] }}</h6>            
                </div>                    

                <div class="col-md-2">
                  <p class="text-muted"> Profession : </p>
                </div>
                <div class="col-md-4">
                 <h6> {{ $user['profession_tuteur'] }}</h6>            
                </div>   

              </div>
            </div>
         </div>
        @endif
      
      </div>
    </div>
  </div>
  

  </div>
</div>  
@endsection