@extends('back.master')
@section('title','Liste Inscription')

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

     <div class="card col-md-12"> 
     	 <div class="card ">
	        <div class="card-header card-header-info card-header-icon">
	          <div class="card-icon">
	            <i class="material-icons">search</i>
	          </div>
	          <h4 class="card-title">Zone de recherche</h4>
	        </div>

          <form method="post" action="{{url('/inscription/search') }}" name="myForm" onsubmit="return validateForm()">
          {{ csrf_field() }} 
          	<div class="row">
		        <div class="col-md-4 offset-1">
		            <div class="form-group">
		              <label for="exampleMatricule" class="bmd-label-floating" >Numero d'inscription</label>
		              <input type="text" name="num_inscription" class="form-control" id="exampleMatricule">
		            </div>
	            </div>
	            <div class="col-md-4">
		            <div class="form-group">
		              <label for="exampleEmail" class="bmd-label-floating">Email </label>
		              <input type="email" name="email" class="form-control" id="exampleEmail">
		            </div>
	            </div>
	            <div class="col-md-2">
		            <div class="form-group">
                        <button type="submit" class="btn btn-info btn-round" title="détail"><i class="material-icons">search</i></button>
		            </div>
	            </div>
	            <div class="col-md-9 offset-1">
	            	<span id="msg" style="text-align: center;color: red;display: none;">Remplis une de deux champs !</span>
	        </div>    
	            </div>

          </form>
      </div>
    </div>

	<div class="col-md-12">
	  <div class="card">
	
	    <div class="card-body">
	      <div class="toolbar">
	        <!--        Here you can write extra buttons/actions for the toolbar              -->
	      </div>
	      <div class="material-datatables">
	
	      	<a href="{{url('/inscription/new')}}" type="button" class="btn btn-success btn-round" title="Ajouter">
	      		<i class="material-icons">add</i>
          	</a>
	
	        <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
	          <thead>
	            <tr>
	              <th style="color: red"><b>Numero d'inscription</b></th>
	              <th style="color: red"><b>Prénom Nom</b></th>
	              <th style="color: red"><b>Catégorie</b></th>
	              <th style="color: red"><b>Niveau</b></th>
	              <th style="color: red"><b>Classe</b></th>
	              <th style="color: red"><b>Tarif</b></th>
	              <th style="color: red"><b>Année</b></th>  
	              <th style="color: red"><b>Création</b></th>   
	              <th class="disabled-sorting"></th>
	              <th class="disabled-sorting"></th>
	              <th class="disabled-sorting"></th>
	            </tr>
	          </thead> 
	          <tbody>
	            @foreach($inscriptions as $inscription)
	            <tr>
	              <td>{{ $inscription->num_inscription }}</td> 
	              <td>{{ $inscription->etudiants->users->prenom }} {{ $inscription->etudiants->users->nom }}</td> 
	              <td>{{ $inscription->categories->titre }}</td>
	              <td>{{ $inscription->categories->niveau }}</td> 
	              <td>{{ $inscription->classes->titre }}</td> 
	              <td>{{ $inscription->tarif }}</td> 
	              <td>{{ $inscription->années->titre }}</td> 
	              <td>{{ $inscription->created_at->format('d-m-Y') }}</td> 
	              	<td class="td-actions text-right">
	               		<a href="{{url('/inscription/'.$inscription->id)}}" type="button" class="btn btn-info btn-round" title="détail"><i class="material-icons">remove_red_eye</i> 
                  	</a> 
                  </td> 
                  <td class="td-actions text-right">
                  	<a href="{{url('/inscription/'.$inscription->id.'/edit')}}" type="button" class="btn btn-warning btn-round" title="Modifier"><i class="material-icons">edit</i> 
                  	</a> 
                  </td>
                  <td class="td-actions text-right">
                  	 <form action="{{url('/inscription/'.$inscription->id)}}" method="post">
	                      {{csrf_field()}}
	                      {{method_field('DELETE')}}
	                      <button type="submit"  class="btn btn-danger btn-round" title="Suprimer" style="padding: 6px;">
	                      <i class="material-icons">close</i>
	                      </button>
                     </form>  
	              	</td>
	            </tr>              
	            @endforeach       
	          </tbody>
	        </table>
	      </div>
	    </div>
	    <!-- end content-->
	  </div>
	  <!--  end card  -->
	</div>
	<!-- end col-md-12 -->
</div> 

 <script type="text/javascript">
  function validateForm() {
    var a = document.forms["myForm"]["num_inscription"].value;
    var b = document.forms["myForm"]["email"].value; 
    if (a ==  "" && b == "") {
      document.getElementById("msg").style.display="block";
      return false;
    }
  }
</script>
@endsection