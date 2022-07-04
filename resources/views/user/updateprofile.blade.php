@extends('back.master')
@section('title','Editer profile')

@section('content') 
<form action="{{ url('/updateprofile')}}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
	
	<div class="row">
	    
		<div class="col-md-8">
		  <div class="card">
		    <div class="card-header card-header-icon card-header-rose">
		      <div class="card-icon">
		        <i class="material-icons">perm_identity</i>
		      </div>
		      <h4 class="card-title"> 
		        <small class="category">Info étudiant</small>
		      </h4>
		    </div> 

		    <div class="card-body">
		        <div class="row"> 
		          <div class="col-lg-6">
		            <div class="form-group">
		              <label class="bmd-label-floating">Prénom</label>
		              <input type="text" class="form-control" name="prenom" value="{{ $data['users']['prenom'] }}">
		            </div>
		          </div>
		          <div class="col-lg-6">
		            <div class="form-group">
		              <label class="bmd-label-floating">Nom</label>
		              <input type="text" class="form-control" name="nom" value="{{ $data['users']['nom'] }}">
		            </div>
		          </div> 
		        </div> 

		        <br>
		        <div class="row">
		          <div class="col-lg-6">
		            <div class="form-group">
		              <label class="bmd-label-floating">Email</label>
		              <input type="email" class="form-control" name="email" value="{{ $data['users']['email'] }}">
		            </div>
		          </div>
		          <div class="col-lg-6">
		            <div class="form-group">
		              <label class="bmd-label-floating">Tél</label>
		              <input type="number" class="form-control" name="tel" value="{{ $data['users']['tel'] }}">
		            </div>
		          </div>
		        </div> 

		        <br>
		        <div class="row">                       
		          <div class="col-lg-4">
		            <div class="form-group"> 
		              <select class="selectpicker" data-style="select-with-transition" name="sexe" title="Sexe"> 
		              @if($data['users']['sexe'] == 'Homme')
	                      <option value="{{ $data['users']['sexe'] }}" selected> Homme </option> 
	                      <option value="Femme" > Femme </option>
	                       @else
	                      <option value="Homme" > Homme </option> 
	                      <option value="{{ $data['users']['sexe'] }}" selected> Femme </option> 
	                    @endif 
		              </select> 
		            </div>
		          </div> 
		          <div class="col-lg-4">
		            <div class="form-group"> 

		              <label class="bmd-label-floating">Date naissance</label>
		              <input type="date" class="form-control datepicker" name="ddn" value="{{ $data['users']['ddn']}}">
		            </div>
		          </div>
		          <div class="col-lg-4">
		            <div class="form-group">
		              <label class="bmd-label-floating">Lieu Naissance</label>
		              <input type="text" class="form-control" name="lieu_naissance" value="{{ $data['users']['lieu_naissance'] }}">
		            </div>
		          </div> 
		        </div>
		        <br>

		        <div class="row"> 
		          <div class="col-lg-12">
		            <div class="form-group">
		              <label class="bmd-label-floating">Adresse</label>
		              <textarea class="form-control" name="adresse"  rows="5">{{ $data['users']['adresse'] }}</textarea> 
		            </div>
		          </div> 
		        </div> 

		        <br>
		        @if($data['users']['role'] == 'etudiant')
		        <h4><small class="category">Info parent</small></h4>
		        <div class="row">
		          <div class="col-lg-4">
		            <div class="form-group">
		              <label class="bmd-label-floating">Prénom</label>
		              <input type="text" class="form-control" name="prenom_tuteur" value="{{ $data['prenom_tuteur'] }}">
		            </div>
		          </div>
		          <div class="col-lg-4">
		            <div class="form-group">
		              <label class="bmd-label-floating">Nom</label>
		              <input type="text" class="form-control" name="nom_tuteur" value="{{ $data['nom_tuteur'] }}">
		            </div>
		          </div>
		          <div class="col-lg-4">
		            <div class="form-group">
		              <label class="bmd-label-floating">Tél</label>
		              <input type="number" class="form-control" name="tel_tuteur" value="{{ $data['tel_tuteur'] }}">
		            </div>
		          </div> 
		        </div> 

		        <br>
		        <div class="row">
		          <div class="col-lg-4">
		            <div class="form-group">
		              <label class="bmd-label-floating">Email</label>
		              <input type="email" class="form-control" name="email_tuteur" value="{{ $data['email_tuteur'] }}">
		            </div>
		          </div>
		          <div class="col-lg-4">
		            <div class="form-group"> 
		              <select class="selectpicker" data-style="select-with-transition" name="sexe_tuteur" title="Sexe"> 
		                      <option value="Homme" {{ ( $data['sexe_tuteur'] == 'Homme') ? 'selected' : '' }}> Homme </option>
		                      <option value="Femme" {{ ( $data['sexe_tuteur'] == 'Femme') ? 'selected' : '' }}> Femme </option> 
		              </select> 
		            </div>
		          </div>
		          <div class="col-lg-4">
		            <div class="form-group">
		              <label class="bmd-label-floating">Profession</label>
		              <input type="text" class="form-control" name="profession_tuteur" value="{{ $data['profession_tuteur'] }}">
		            </div>
		          </div> 
		        </div>  
		        @endif

		        @if($data['users']['role'] == 'professeur')
		        <h4><small class="category">Détail professeur</small></h4>
		        <br>
		        <div class="row">
		          <div class="col-lg-4">
		            <div class="form-group">
		              <label class="bmd-label-floating">CIN</label>
		              <input type="text" class="form-control" name="cin" value="{{ $data['cin'] }}">
		            </div>
		          </div>
		          <div class="col-lg-4">
		            <div class="form-group">
		              <label class="bmd-label-floating">Diplome</label>
		              <input type="text" class="form-control" name="diplome" value="{{ $data['diplome'] }}">
		            </div>
		          </div>
		          <div class="col-lg-4">
		            <div class="form-group">
		              <label class="bmd-label-floating">Promo</label>
		              <input type="number" class="form-control" name="promo" value="{{ $data['promo'] }}">
		            </div>
		          </div> 
		        </div>   
		        @endif
		        <br>
		        <button type="submit" class="btn btn-rose pull-right">Update Profile</button>
		        <div class="clearfix"></div>
		      
		    </div>
		  </div>
		</div>             

		<div class="col-md-4">
		  <h4 class="title text-center">Photo de profil</h4>
		  <div class="fileinput fileinput-new text-center" data-provides="fileinput" style="display: block;">
		    <div class="fileinput-new thumbnail">
		      <img src="{{ asset('storage/'.$data['users']['avatar']) }}" alt="...">
		    </div>
		    <div class="fileinput-preview fileinput-exists thumbnail"></div>
		    <div>
		      <span class="btn btn-round btn-rose btn-file">
		        <span class="fileinput-new">Add Photo</span>
		        <span class="fileinput-exists">Change</span>
		        <input type="file" name="avatar" value="" />
		      </span>
		      <br />
		      <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
		    </div>
		  </div>
		</div>

	</div> 

</form>
@endsection