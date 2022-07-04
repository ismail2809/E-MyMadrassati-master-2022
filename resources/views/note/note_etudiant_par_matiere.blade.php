@extends('back.master') 
@section('title','Notes Etudiant')
@section('content')

<div class="row">
	<div class="col-md-12">
	  <div class="card">
	    <div class="card-header card-header-warning card-header-icon">
	      <div class="card-icon">
	        <i class="material-icons">assignment</i>
	      </div>
	      <h4 class="card-title">Notes Etudiant</h4>
	    </div>
	    <div class="card-body">
	      <div class="toolbar">
	        <!--        Here you can write extra buttons/actions for the toolbar              -->
	      </div>
	      <div class="material-datatables">
            <a href="{{ url('notes/etudiant/new') }}" type="button" rel="tooltip" class="btn btn-success btn-round" title="Ajouter une note">
              <i class="material-icons">add</i>
            </a>

	        <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
	          <thead>
	            <tr> 
	              <th>Etudiant</th>
	              <th>Professeur</th>
	              <th>Classe</th>
	              <th>Matière</th>
	              <th>Classe</th>
	              <th>Matière</th>   
	              <th>Année</th>  
	              <th class="disabled-sorting"></th>
	              <th class="disabled-sorting">Actions</th>
	            </tr>
	          </thead> 
	          <tbody>
	          @foreach($notes as $note)

	            <tr>
	              <td>{{ $note['etudiants']['users']['prenom']}} {{ $note['etudiants']['users']['nom']}}</td>
	              <td>{{ $note['professeurs']['users']['prenom']}} {{ $note['etudiants']['users']['nom']}}</td>
	              <td>{{ $note['classes']['titre']}}</td> 
	              <td>{{ $note['matieres']['titre']}}</td> 
	              <td>{{ $note['note']}}</td>  
	              <td>{{ $note['observation']}}</td>    
	              <td>{{ $note['created_at']}}</td>    
	              <td class="td-actions">
	                <button type="button" rel="tooltip" class="btn btn-warning btn-round" title="Modifier">
	                  <i class="material-icons">edit</i>
	                </button>
	              </td>
	              <td class="td-actions">

	                <button type="button" rel="tooltip" class="btn btn-danger btn-round" title="Supprimer">
	                  <i class="material-icons">close</i>
	                </button>
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