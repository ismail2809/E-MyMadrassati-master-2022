@extends('back.master') 
@section('title','Les notes de la classe')
@section('content')

<div class="row">
	<div class="col-md-12">
	  <div class="card">
	    <div class="card-header card-header-success card-header-icon">
	      <div class="card-icon">
	        <i class="material-icons">assignment</i>
	      </div>
	      <h4 class="card-title">La classe</h4>
	    </div>
	    <div class="card-body">
	      <div class="toolbar">
	        <!--        Here you can write extra buttons/actions for the toolbar              -->
	      </div>
	      <div class="material-datatables">
	        <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
	          <thead>
	            <tr>
	              <th style="color: red">Numero d'inscription</th>
	              <th style="color: red">Prénom Nom</th>
	              <th style="color: red">Classe</th>
	              <th style="color: red">Matière</th>   
	              <th style="color: red">Année</th>  
	              <th style="color: red" class="disabled-sorting text-center" colspan="2">Actions</th>
	            </tr>
	          </thead> 
	          <tbody>
	          	@foreach($inscription as $result)
	          		@if(isset($result['etudiants']['user_id']))
              		@php
              		$user = App\User::where('id',$result['etudiants']['user_id'])->first();
                	@endphp 
		            <tr>
		              <td>{{ $result['num_inscription'] }}</td>
		              <td>{{ $user->prenom }} {{ $user->nom }}</td>
		              <td>{{ $result['classes']['titre'] }}</td> 
		              <td>{{ $data['matiere']['titre'] }}</td>  
		              <td>{{ $result['années']['titre'] }}</td> 
		              <td class="td-actions text-right">
		              	<a href="{{ route('note_add')}}"  class="btn btn-warning btn-round" title="Ajouter note"><i class="material-icons">add</i></a> 
		              </td>
		              <td class="td-actions text-right">
		              	<a href="{{ url('note/'.$result['id'].'/'.$data['matiere']['id'].'/list') }}"  class="btn btn-info btn-round" title="Liste des notes"><i class="material-icons">remove_red_eye</i></a> 
		              </td>
		            </tr>     
	            	@endif
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