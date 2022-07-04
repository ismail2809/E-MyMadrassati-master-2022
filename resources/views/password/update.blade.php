@extends('back.master')

@section('title','Ajouter admin')
@section('content') 

@if ($message = Session::get('success'))
<div class="alert alert-success col-12 text-center">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <i class="material-icons">close</i>
    </button>
    <span><b> {{ $message }} </b></span>
</div>
@endif

<div class="row">
	<div class="col-md-12">
	  <div class="card">
	    <div class="card-header card-header-info card-header-icon">
	      <div class="card-icon">
	        <i class="material-icons">assignment</i>
	      </div>
	      <h4 class="card-title">Modifier mot de passe</h4>
	    </div>
	    <div class="card-body">
	    	<div class="toolbar">
	       <div class="pull-right">
	            <a class="btn btn-success" href="{{ route('users.index') }}"> Back</a>
	        </div>
	      </div>
		  <div class="col-md-12">
		     <form method="post" action="{{url('/update_password/'.$user->id)}}" class="form-horizontal">         
		     {{ csrf_field() }}  

		    <div class="card-body">   

	        <div class="row">
	          <label class="col-sm-2 col-form-label">Email</label>
	          <div class="col-sm-4">
	            <div class="form-group">
	              <input type="email" class="form-control" name="email" value="{{ $user->email }}" readonly>
	            </div>
	          </div>
	        </div>  

	        <div class="row">
	          <label class="col-sm-2 col-form-label">Nouveau mot de paase</label>
	          <div class="col-sm-4">
	            <div class="form-group">
	              <input type="password" id="pwd" class="form-control" name="password" placeholder="Mot de paase" autocomplete="off">
	            </div>
	          </div>
	        </div>  

	        <div class="row">
	          <label class="col-sm-2 col-form-label">Confirmer le mot de paase</label>
	          <div class="col-sm-4">
	            <div class="form-group">
	              <input type="password" id="cpwd" class="form-control" name="password" placeholder="Mot de paase" autocomplete="off">
	            </div>
	          </div>
	        </div>   

		     <div class="card-footer">
		        <div class="ml-auto">
		          <input type="submit" class="btn btn-info" value="Valider">
		        </div>
		        <div class="clearfix"></div>
		    </div>

		  </form>

		 </div>
        </div>
      </div>

	    <!-- end content-->
	  </div>
	  <!--  end card  -->
	</div>
	<!-- end col-md-12 -->
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