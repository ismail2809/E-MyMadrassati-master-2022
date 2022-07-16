@extends('backend.master')
@section('title','Editer profile')

@section('content') 

<div class="container-fluid p-0">

<div class="mb-3">
    <h4 class="h4 mb-3">
      <a href="{{url('/profile')}}" title="Retour profile">
        <i class="align-middle me-2" data-feather="arrow-left-circle"></i>  Retour profile
      </a> 
    </h4>
</div>

<div class="card"> 
      <div class="card-body">

				<form action="{{ url('/updateprofile')}}" method="post" enctype="multipart/form-data">
				{{ csrf_field() }}
				<div class="row"> 

					<div class="col-md-12">
				         
				        <div class="card" style="box-shadow: 5px 5px 5px 5px grey;"> 
				            <div class="card-header" style="background-color:#207CF3">
				                <h5 class="card-title mb-0" style="color: white;"><strong>Mes informations </strong></h5>
				            </div>
				            
				            <div class="card-body h-100">
				              <div class="row">

				                <div class="col-md-2">
				                  <p class="text-muted"> Prénom : </p>
				                </div>
				                <div class="col-md-4">
					              <input type="text" class="form-control" name="prenom" value="{{ $user['users']['prenom'] }}">
				                </div>
				                
				                <div class="col-md-2">
				                  <p class="text-muted"> Nom : </p>
				                </div>
				                <div class="col-md-4">
						     <input type="text" class="form-control" name="nom" value="{{ $user['users']['nom'] }}">		        
				                </div>          

				                <div class="col-md-2">
				                  <p class="text-muted"> Email : </p>
				                </div>
				                <div class="col-md-10">
						     <input type="email" class="form-control" name="email" value="{{ $user['users']['email'] }}"readonly>
				                </div>          

				                <div class="col-md-2">
				                  <p class="text-muted"> Telephone : </p>
				                </div>
				                <div class="col-md-4">
						    <input type="number" class="form-control" name="tel" value="{{ $user['users']['tel'] }}">
				                </div>
				                
                <div class="col-md-2">
                  <p class="text-muted"> Sexe : </p>
                </div>
                <div class="col-md-4">
					    	<select class="form-control" name="sexe" title="Sexe"> 
					      	@if($user['users']['sexe'] == 'Homme')
						      <option value="{{ $user['users']['sexe'] }}" selected> Homme </option> 
						      <option value="Femme" > Femme </option>
						       @else
						      <option value="Homme" > Homme </option> 
						      <option value="{{ $user['users']['sexe'] }}" selected> Femme </option> 
				                @endif 
				            	</select>
				                </div>          
				                
				                <div class="col-md-2">
				                  <p class="text-muted"> Date naissance  : </p>
				                </div>
				                <div class="col-md-4">
						     <input type="date" class="form-control" name="ddn" value="{{ $user['users']['ddn']}}">
				                </div>
				                
				                <div class="col-md-2">
				                  <p class="text-muted"> Lieu naissance  : </p>
				                </div>
				                <div class="col-md-4">		              
				                     <input type="text" class="form-control" name="lieu_naissance" value="{{ $user['users']['lieu_naissance'] }}">
				                </div>     

				                <div class="col-md-2">
				                  <p class="text-muted"> Adresse : </p>
				                </div>        
				                <div class="col-md-10">
							<textarea class="form-control" name="adresse" rows="5">{{ $user['users']['adresse'] }}</textarea>
				                </div>   
				                
				              </div>
				            </div>
				        </div>
				          
				        @if($user['users']['role'] == "professeur")          
					        <div class="card"> 
					            <div class="card-header" style="background-color:#207CF3">
					                <h5 class="card-title mb-0" style="color: white;"><strong>Informations professeur</strong></h5>
					            </div>
					            
					            <div class="card-body h-100">
					              
					              <div class="row">

					                <div class="col-md-2">
					                  <p class="text-muted"> Cin : </p>
					                </div>
					                <div class="col-md-4">
							     <input type="text" class="form-control" name="cin" value="{{ $user['cin'] }}">
					                </div>
					                
					                <div class="col-md-2">
					                  <p class="text-muted"> Diplome : </p>
					                </div>
					                <div class="col-md-4">
							     <input type="text" class="form-control" name="diplome" value="{{ $user['diplome'] }}">
					                </div>          

					                <div class="col-md-2">
					                  <p class="text-muted"> Promo : </p>
					                </div>
					                <div class="col-md-4">
							     <input type="number" class="form-control" name="promo" value="{{ $user['promo'] }}">
					                </div>          

					              </div>
					            </div>
					        </div>
				        @endif


				        @if($user['users']['role'] == "etudiant")  
				         <div class="card" style="box-shadow: 5px 5px 5px 5px grey;"> 
				            <div class="card-header" style="background-color:#207CF3">
				                <h5 class="card-title mb-0" style="color: white;"><strong>Informations Tuteur</strong></h5>
				            </div>
				            
				            <div class="card-body h-100">      
				              <div class="row">

				                <div class="col-md-2">
				                  <p class="text-muted">  Prénom : </p>
				                </div>
				                <div class="col-md-4">
				                   <input type="text" class="form-control" name="prenom_tuteur" value="{{ $user['prenom_tuteur'] }}">   
				                </div>

				                <div class="col-md-2">
				                  <p class="text-muted">  Nom : </p>
				                </div>
				                <div class="col-md-4">
				                 <input type="text" class="form-control" name="nom_tuteur" value="{{ $user['nom_tuteur'] }}">            
				                </div>
				                
				                <div class="col-md-2">
				                  <p class="text-muted"> Telephone : </p>
				                </div>
				                <div class="col-md-4">
				                 <input type="number" class="form-control" name="tel_tuteur" value="{{ $user['tel_tuteur'] }}">            
				                </div>          

				                <div class="col-md-2">
				                  <p class="text-muted"> Email : </p>
				                </div>
				                <div class="col-md-4">
				                 <input type="email" class="form-control" name="email_tuteur" value="{{ $user['email_tuteur'] }}">            
				                </div>          
				                
				                <div class="col-md-2">
				                  <p class="text-muted"> Sexe : </p>
				                </div>
				                <div class="col-md-4">
				                 <select class="form-control" name="sexe_tuteur" title="Sexe"> 
				                      <option value="Homme" {{ ( $user['sexe_tuteur'] == 'Homme') ? 'selected' : '' }}> Homme </option>
				                      <option value="Femme" {{ ( $user['sexe_tuteur'] == 'Femme') ? 'selected' : '' }}> Femme </option> 
				                 </select>           
				                </div>                    

				                <div class="col-md-2">
				                  <p class="text-muted"> Profession : </p>
				                </div>
				                <div class="col-md-4">
				                 <input type="text" class="form-control" name="profession_tuteur" value="{{ $user['profession_tuteur'] }}">     
				                </div>   

				              </div>
				            </div>
				         </div>
				        @endif
				      
					</div>
					<div class="col-md-2">
			     <button type="submit" class="btn btn-primary">Eneregister</button>
					</div>

				</div>
				</form>	
				<hr>
      
      <div class="card-footer">
			<form method="post" action="{{ url('/update_password/'.$user['users']['id']) }}" class="form-horizontal">
			                    {{ csrf_field() }}
		   	<div class="row"> 

						<div class="col-md-12">
					         
					        <div class="card" style="box-shadow: 5px 5px 5px 5px grey;"> 
						   

					            <div class="card-header" style="background-color:orange;">
					                <h5 class="card-title mb-0" style="color: white;"><strong>Mot de passe</strong></h5>
					            </div>
					            
					            <div class="card-body h-100">      
					              <div class="row">

					                <div class="col-md-2">
					                  <p class="text-muted">  Nouveau mot de passe : </p>
					                </div>
					                <div class="col-md-4">
					     	              <input type="password" id="pwd" class="form-control" name="password" placeholder="Nouveau mot de paase" autocomplete="off"> 
					                </div>

					                <div class="col-md-2">
					                  <p class="text-muted">  Confirmer mot de passe : </p>
					                </div>
					                <div class="col-md-4">
					                 <input type="password" id="cpwd" class="form-control" name="password" placeholder="Confirmer mot de passe" autocomplete="off">          
					                </div>
					                
					                <div class="col-md-2">
					                  <button type="submit" class="btn btn-primary">Eneregister</button>
					                </div>   

					              </div>
					            </div>
					         </div>
						      
						</div> 

				</div>
			</form>
			
			</div>

	</div>  
</div>  

</div>  
 <script>
  var password = document.getElementById("pwd");
  var confirm_password = document.getElementById("cpwd");
 
 function validatePassword(){
   if(password.value != confirm_password.value) {
 confirm_password.setCustomValidity("Le mots de passe ne correspondent pas");
   } else {
 confirm_password.setCustomValidity('');
   }
 }
 
 password.onchange = validatePassword;
 confirm_password.onkeyup = validatePassword;
  </script>
@endsection