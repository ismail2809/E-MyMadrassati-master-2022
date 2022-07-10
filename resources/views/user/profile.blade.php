@extends('back.master')
@section('title','Profile')

@section('content') 
<div class="row">
  @if ($message = Session::get('info'))
  <div class="alert alert-info col-12 text-center">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <i class="material-icons">close</i>
      </button>
      <span><b> {{ $message }} </b></span>
  </div>
  @endif
  @if ($message = Session::get('success'))
  <div class="alert alert-success col-12 text-center">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <i class="material-icons">close</i>
      </button>
      <span><b> {{ $message }} </b></span>
  </div>
  @endif
  @if ($message = Session::get('error'))
  <div class="alert alert-danger col-12 text-center">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <i class="material-icons">close</i>
      </button>
      <span><b> {{ $message }} </b></span>
  </div>
  @endif
  @if ($message = Session::get('warning'))
  <div class="alert alert-warning col-12 text-center">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <i class="material-icons">close</i>
      </button>
      <span><b> {{ $message }} </b></span>
  </div>
  @endif 
    <div class="col-md-9">
      <div class="card">
      <div class="card-header card-header-icon card-header-rose">
        <div class="card-icon">
          <i class="material-icons">perm_identity</i>
        </div>
        <h4 class="card-title">Profile -
          <small class="category">Mes infos</small>
        </h4>
      </div> 

      <div class="card-body">
        <div class="row">
          <div class="col-lg-3 col-md-6">
            <!--
                      color-classes: "nav-pills-primary", "nav-pills-info", "nav-pills-success", "nav-pills-warning","nav-pills-danger"
                  -->
            <ul class="nav nav-pills nav-pills-rose nav-pills-icons flex-column" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#link110" role="tablist">
                @if($user['users']['role'] == "etudiant")
                  <i class="material-icons">dashboard</i> Etudiant
                @endif
                @if($user['users']['role'] == "professeur")
                  <i class="material-icons">dashboard</i> Professeur
                @endif  
                @if($user['users']['role'] == "admin")
                  <i class="material-icons">dashboard</i> Admin
                @endif               
                </a>
              </li>
              @if($user['users']['role'] == "etudiant")
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#link111" role="tablist">
                  <i class="material-icons">settings</i> Parent
                </a>
              </li> 
              @endif

              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#link112" role="tablist">
                  <i class="material-icons">vpn_key</i> Mot de passe
                </a>
              </li>

            </ul>
          </div>
          <div class="col-md-9">
            <div class="tab-content">
              <div class="tab-pane active" id="link110">
                
                <p class="text-muted"> Nom complet</p> <h6> {{ $user['users']['prenom'] }} {{ $user['users']['nom'] }}</h6> 
                <br>                
                <p class="text-muted"> Email </p> <h6> {{ $user['users']['email'] }}</h6>                 
                <br>
                <p class="text-muted"> Telephone</p> <h6> {{ $user['users']['tel'] }}</h6> 
                <br>
                <p class="text-muted"> Adresse</p> <h6> {{ $user['users']['adresse'] }}</h6> 
                <br>
                <p class="text-muted"> Date naissance</p> <h6> {{ $user['users']['ddn'] }}</h6> 
                <br>
                <p class="text-muted"> Lieu naissance</p> <h6> {{ $user['users']['lieu_naissance'] }}</h6> 
                <br>
                <p class="text-muted"> Sexe</p> <h6> {{ $user['users']['sexe'] }}</h6> 
                <br>
                <p class="text-muted"> Role</p> <h6> {{ $user['users']['role'] }}</h6> 
                <br> 

                @if($user['users']['role'] == "professeur")
                <p class="text-muted"> Cin</p> <h6> {{ $user['cin'] }}</h6> 
                <br>
                <p class="text-muted"> Diplome</p> <h6> {{ $user['diplome'] }}</h6> 
                <br>
                <p class="text-muted"> Promo</p> <h6> {{ $user['promo'] }}</h6> 
                <br>
                @endif
                <p class="text-muted"> Création</p> <h6> {{ $user['created_at'] }}</h6>  
              </div>
              
              @if($user['users']['role'] == "etudiant")
              <div class="tab-pane" id="link111">
                
                <p class="text-muted"> Nom complet</p> <h6> {{ $user['prenom_tuteur'] }} {{ $user['nom_tuteur'] }}</h6> 
                <br>
                <p class="text-muted"> Telephone</p> <h6> {{ $user['tel_tuteur'] }}</h6>   
                <br>                
                <p class="text-muted"> Email </p> <h6> {{ $user['email_tuteur'] }}</h6>                 
                <br>
                <p class="text-muted"> Profession</p> <h6> {{ $user['profession_tuteur'] }}</h6> 
                <br>
                <p class="text-muted"> Sexe</p> <h6> {{ $user['sexe_tuteur'] }}</h6>  
                <br>
                <p class="text-muted"> Création</p> <h6> {{ $user['created_at'] }}</h6>  

              </div>
              @endif
              @if($user['users']['role'] == "admin")
              <div class="tab-pane" id="link111"> 
                <p class="text-muted"> Création</p> <h6> {{ $user['created_at'] }}</h6>  
              </div>
              @endif 

              <div class="tab-pane" id="link112">
                <div class="card">                    
                  <div class="card-body">
                    <form method="post" action="{{ url('/update_password/'.$user['users']['id']) }}" class="form-horizontal">
                    {{ csrf_field() }}                      

                      <div class="row">
                        <label class="col-sm-2 col-form-label">Email </label>
                        <div class="col-sm-10">
                          <div class="form-group">
                            <input type="text" class="form-control" name="email" readonly value="{{ $user['users']['email'] }}">
                          </div>
                        </div>
                      </div> 

                      <div class="row">
                        <label class="col-sm-2 col-form-label">Nouveau Mot de passe </label>
                        <div class="col-sm-10">
                          <div class="form-group"> 
                             <input type="password" id="pwd" class="form-control" name="password" placeholder="Mot de paase" autocomplete="off" value="">
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <label class="col-sm-2 col-form-label">Confirmer Mot de passe </label>
                        <div class="col-sm-10">
                          <div class="form-group"> 
                             <input type="password" id="pwd" class="form-control" name="password" placeholder="Mot de paase" autocomplete="off" value="">
                          </div>
                        </div>
                      </div>

                      <button type="submit" class="btn btn-warning btn-fill">Modifier</button>
                      <div class="clearfix"></div>                       
                    </form>
                  </div>
                </div> 
              </div>
 
            </div>
          </div>
        </div>
      </div> 

      </div>
    </div>
    
    <div class="col-md-3">
      <div class="card card-profile">
             
              <div class="card-avatar">
                   <img class="img" src="{{ asset('storage/'.$user['users']['avatar']) }}" />
               </div>
              <div class="card-body">
                <h6 class="card-category text-gray">{{ $user['users']['role'] }}</h6>
               
                
                <h4 class="card-title">{{ $user['users']['prenom'] }} {{ $user['users']['nom'] }}</h4>          
              <br>  
         </div>
      </div>
    </div>

</div>              

@endsection