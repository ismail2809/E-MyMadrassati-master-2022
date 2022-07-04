@extends('back.master')

@section('title','Modifier admin')
@section('content') 
 
<div class="row">
	<div class="col-md-12">
	  <div class="card">
	    <div class="card-header card-header-success card-header-icon">
	      <div class="card-icon">
	        <i class="material-icons">assignment</i>
	      </div>
	      <h4 class="card-title">Modifier admin</h4>
	    </div>
	    <div class="card-body">
		  <div class="col-md-12">
		     <form method="post" action="{{url('/admin')}}" class="form-horizontal">         
		     {{ csrf_field() }}  

		    <div class="card-body">             
		        <div class="row">
		          <label class="col-sm-2 col-form-label">Prenom</label>
		          <div class="col-sm-4">
		            <div class="form-group">
		              <input type="text" class="form-control" name="prenom" value="{{ $admin->prenom }}" placeholder="Prenom" autocomplete="off">
		            </div>
		          </div>
		        </div>  

		        <div class="row">
		          <label class="col-sm-2 col-form-label">Nom</label>
		          <div class="col-sm-4">
		            <div class="form-group">
		              <input type="text" class="form-control" name="nom" value="{{ $admin->nom }}" placeholder="Nom" autocomplete="off">
		            </div>
		          </div>
		        </div>  

		        <div class="row">
		          <label class="col-sm-2 col-form-label">Phone</label>
		          <div class="col-sm-4">
		            <div class="form-group">
		              <input type="number" class="form-control" name="tel" value="{{ $admin->tel }}" placeholder="Phone" >
		            </div>
		          </div>
		        </div>  


		        <div class="row">
		         	<label>Sexe</label>
	                <select class="selectpicker" name="sexe" data-style="select-with-transition" title="Sexe"> 
                    @if($users->sexe == 'Homme')
                      <option value="{{$users->sexe}}" selected> Homme </option> 
                      <option value="Femme" > Femme </option>
                       @else
                      <option value="Homme" > Homme </option> 
                      <option value="{{$users->sexe}}" selected> Femme </option> 
                    @endif
                  </select> 
		        </div>   

		        <div class="row">
		          <label class="col-sm-2 col-form-label">Email</label>
		          <div class="col-sm-4">
		            <div class="form-group">
		              <input type="email" class="form-control" name="email" value="{{ $admin-> }}" placeholder="Email" autocomplete="off">
		            </div>
		          </div>
		        </div>  
 

		        <div class="row">
		          <label class="col-sm-2 col-form-label">Mot de paase</label>
		          <div class="col-sm-4">
		            <div class="form-group">
		              <input type="password" class="form-control" name="password" value="{{ $admin-> }}" placeholder="Mot de paase" autocomplete="off">
		            </div>
		          </div>
		        </div>  

		        <div class="row">
		          <label class="col-sm-2 col-form-label">Date de naissance</label>
		          <div class="col-sm-4">
		            <div class="form-group">
		              <input type="date" class="form-control" name="ddn" value="{{ $admin-> }}" placeholder="Date de naissance">
		            </div>
		          </div>
		        </div>  

		        <div class="row">
		          <label class="col-sm-2 col-form-label">Lieu de naissance</label>
		          <div class="col-sm-4">
		            <div class="form-group">
		              <input type="text" class="form-control" name="lieu_naissance" value="{{ $admin-> }}" placeholder="Lieu naissance" autocomplete="off"	>
		            </div>
		          </div>
		        </div>  

		        <div class="row">
		        	<div class="col-sm"> 
                        <div class="form-group">
                          <label class="bmd-label-floating">Adresse</label>
                          <textarea class="form-control" rows="5" name="adresse"></textarea>
                        </div>
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

@endsection