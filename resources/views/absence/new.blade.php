@extends('back.master') 
@section('title','Recherche Classe')

@section('content')
<div class="row">
	<div class="col-lg-12">
	  
	  <div class="card">

	    <div class="card-header card-header-success card-header-text">
	      <div class="card-icon">
	        <i class="material-icons">query_builder</i>
	      </div>
	      <h4 class="card-title">Absences </h4>
	    </div>

	    <div class="card-body">
		   <form action="{{url('/absence/search')}}" method="post">
          {{ csrf_field() }} 

		   <div class="row" style="text-align: center">

		     <div class="col-md-3">
		       <div class="form-group select-wizard">
	                <select class="selectpicker" data-size="7" data-style="select-with-transition" name="classe_id" title="Classe"> 
                      @foreach($classes as $classe)
                      <option value="{{ $classe->id }}"> {{ $classe->titre}} </option> 
                      @endforeach 
                    </select>
	           </div>
		 	 </div>

		 	 <div class="col-md-3">
		       <div class="form-group select-wizard">
	                <select class="selectpicker" data-size="7" data-style="select-with-transition" name="matiere_id" title="Matière"> 
	                   @foreach($matieres as $matiere)
                      <option value="{{ $matiere->id }}"> {{ $matiere->titre}} </option> 
                      @endforeach 
	                </select>
	           </div>
		 	 </div>	

		 	 <div class="col-md-3">
		       <div class="form-group select-wizard">
	               <select class="selectpicker" data-size="7" data-style="select-with-transition" name="année_id" title="Année"> 
	                 @foreach($années as $année)
                      <option value="{{ $année->id }}"> {{ $année->titre}} </option> 
                     @endforeach 
                   </select>
	           </div>
		 	 </div>	 
	 			
	 		<div class="col-md-3">
		      <div class="form-group">
		         <button class="btn btn-info btn-round" type="submit">
	                    Recherche &nbsp;<i class="material-icons">search</i> 
	             </button>
		      </div>
		     </div>

		   </div>
		   </form>

	  </div>
	 </div>
	</div>
</div>
@endsection