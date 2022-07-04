@extends('back.master') 
@section('title','Liste des Matières')

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
	<div class="col-md-12">
	  <div class="card">
	    <div class="card-header card-header-info card-header-icon">
	      <div class="card-icon">
	        <a href="{{url('/matiere/new')}}"  class="btn btn-info" title="Ajouter"><i class="material-icons">add</i> 
          	</a>
	      </div>
	      <h4 class="card-title">Liste des Matières</h4>
	    </div>
	    <div class="card-body">
	      <div class="toolbar">
	        <!--        Here you can write extra buttons/actions for the toolbar              -->
	      </div>
	      <div class="material-datatables">

      	    <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
	          <thead> 
	            <tr>
	              <th style="text-align: center;color: red"><b>Titre</b></th> 
	              <th style="text-align: center;color: red"><b>Description</b></th> 
	              <th style="text-align: center;color: red" colspan="2"><b>actions</b></th>
	            </tr> 
	          </thead> 
	          <tbody> 
	            @foreach($matieres as $matiere)
	            <tr>
	             <td style="text-align: center;">{{ $matiere->titre }}</th> 	              
	             <td style="text-align: center;">{{ $matiere->description }}</th> 	              
	             <td class="td-actions text-right disabled-sorting">
	               	<a href="{{url('/matiere/'.$matiere->id.'/edit')}}"  class="btn btn-warning btn-round" title="Modifier"><i class="material-icons">edit</i> 
                  	</a> 
                 </td>   
                 <td class="td-actions text-left disabled-sorting">
                  	 <form action="{{url('/matiere/'.$matiere->id)}}" method="post">
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
 
@endsection