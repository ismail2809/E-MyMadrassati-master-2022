@extends('back.master') 
@section('title','Ajouter Niveau')

@section('content') 

<div class="row">
	<div class="col-md-12">
	  <div class="card">
	    <div class="card-header card-header-success card-header-icon">
	      <div class="card-icon">
	        <i class="material-icons">assignment</i>
	      </div>
	      <h4 class="card-title">Ajouter Niveau</h4>
	    </div>
	    <div class="card-body">
		  <div class="col-md-12">
		     <form method="post" action="{{ url('/niveau') }}" class="form-horizontal">         
		     {{ csrf_field() }}  

		    <div class="card-body">             
		        <div class="row">
		          <div class="col-sm">
		            <div class="form-group">
			          <label class="bmd-label-floating">Titre</label>
		              <input type="text" class="form-control" name="titre">
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
 
@endsection