@extends('back.master') 
@section('title','Ajouter Classe')

@section('content') 

<div class="row">
	<div class="col-md-12">
	  <div class="card">
	    <div class="card-header card-header-success card-header-icon">
	      <div class="card-icon">
	        <i class="material-icons">assignment</i>
	      </div>
	      <h4 class="card-title">Ajouter Classe</h4>
	    </div>
	    <div class="card-body">
		  <div class="col-md-12">
		     <form method="post" action="{{url('/classe')}}" class="form-horizontal">         
				     {{ csrf_field() }}  

				    <div class="card-body">              
		            <div class="row">
				        	<div class="col-sm"> 
		                        <div class="form-group">
		                          <label class="bmd-label-floating">Titre</label>
		        		              <input type="text" class="form-control" name="titre"  >
		                        </div>
				              </div>
					        </div> 

					     <div class="row">
				        	<div class="col-sm"> 
		                        <div class="form-group">
		                          <label>Catégorie</label>
		                        <select class="selectpicker" data-size="7" data-style="select-with-transition" name="categorie_id" title="Single Select"> 
		                          @foreach($categories as $Catégorie)
		                          <option value="{{ $Catégorie->id }}"> {{ $Catégorie->titre}} </option> 
		                          @endforeach
		                        </select>
		                      </div>
				              </div>
					        </div>  

					        <div class="row">
				        	<div class="col-sm"> 
		                        <div class="form-group">
		                          <label>Niveaux</label>
		                        <select class="selectpicker" data-size="7" data-style="select-with-transition" name="niveau_id" title="Single Select"> 
		                          @foreach($niveaux as $niveau)
		                          <option value="{{ $niveau->id }}"> {{ $niveau->titre}} </option> 
		                          @endforeach
		                        </select>
		                      </div>
				              </div>
					        </div>  

					     	<div class="row">
				        	<div class="col-sm"> 
		                        <div class="form-group">
		                          <label class="bmd-label-floating">Description</label>
		                          <textarea class="form-control" rows="5" name="description"></textarea>
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