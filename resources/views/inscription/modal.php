<td class="td-actions text-center">
	               	<a href="{{url('/payment/add/'.$inscription->id)}}" id="payer" type="button" data-toggle="modal" data-target="#payer" 
	               		data-id="{{ $inscription->id }}" data-num_inscription="{{ $inscription->num_inscription }}" 
	               		data-etudiant_id="{{ $inscription->etudiant_id }}" data-tarif="{{ $inscription->tarif }}" 
	               		data-année_id="{{ $inscription->annee_id }}" class="btn btn-info btn-success" title="payer">
	               		<i class="material-icons">euro</i> 
                  	</a> 
                  </td> 
                  <td class="td-actions text-right">
	               	<a href="{{url('/inscription/renouveler/'.$inscription->id)}}" data-id="{{ $inscription->id }}" data-num_inscription="{{ $inscription->num_inscription }}" data-etudiant_id="{{ $inscription->etudiant_id }}" data-categorie_id="{{ $inscription->categorie_id }}" data-niveau_id="{{ $inscription->niveau_id }}"
	               	data-classe_id="{{ $inscription->classe_id }}" data-tarif="{{ $inscription->tarif }}" data-année_id="{{ $inscription->annee_id }}"   type="button"  data-toggle="modal" data-target="#myModal" class="btn btn-rose btn-round" title="renouveler"><i class="material-icons">cached</i> 
                  	</a> 
                  </td>
<!-- Classic Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
      <h4 class="modal-title"><b>Renouvelé l'inscirption</b> </h4>
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true" >
        <i class="material-icons">clear</i>
      </button>
    </div>

  <form method="post" action="{{route('inscription_renouveler')}}">
  {{ csrf_field() }} 
    <div class="modal-body">
	<div class="row justify-content-center"> 
    	<input type="hidden" id="id" name="id">
    	<input type="hidden" id="num_inscription" name="num_inscription">
    	<input type="hidden" id="etudiant_id" name="etudiant_id">
    	<input type="hidden" id="categorie_id" name="categorie_id">
    	<input type="hidden" id="niveau_id" name="niveau_id">
    	<input type="hidden" id="classe_id" name="classe_id"> 
    	<input type="hidden" id="tarif" name="tarif"> 
    	<input type="hidden" value="Oui"  name="transport"> 
    	<input type="hidden" value="Oui" name="cantine"> 

        <div class="col-sm-12">
          <div class="form-group select-wizard">
            <label>Année Scholaire</label>
            <select class="selectpicker" data-size="7" data-style="select-with-transition" name="année_id" id="année_id" title="Single Select"> 
              @foreach($années as $année)
              <option value="{{ $année->id }}" > {{ $année->titre}} </option> 
              @endforeach
            </select>
          </div>
        </div>
       
      </div>
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-danger btn-link" data-dismiss="modal">Close</button>
      <button type="submit" class="btn btn-rose" >Enregistrer</button>
    </div>
   </form>
  </div>
</div>
</div>
<!--  End Modal -->

   <!-- notice modal -->
<div class="modal fade" id="payer" tabindex="-1" role="dialog" aria-labelledby="payerLabel" aria-hidden="true">
<div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="myModalLabel"><b>Payement</b></h5>
    
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
        <i class="material-icons">close</i>
      </button>
    </div>

    <div class="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <i class="material-icons">close</i>
        </button>
        <span style="text-align: center;">
          <b>Modalité:</b> {{ $inscription->modalité }}  &nbsp; | &nbsp; 
          <b>Tarif: </b> {{ $inscription->tarif }}       &nbsp; | &nbsp; 
          <b> Numéro: </b> {{ ($inscription->num_inscription ) }} 
        </span>
    </div>	

  <form method="post" action="{{url('/payment')}}">
  {{ csrf_field() }} 
    <div class="modal-body">
 
		<div class="row"> 
	    	<input type="hidden" id="id" name="inscription_id">
	     	<input type="hidden" id="etudiant_id" name="etudiant_id">
 	 
		    <div class="col-sm-6">
		      <div class="form-group select-wizard">
 		        <select class="selectpicker" data-size="7" data-style="select-with-transition" name="année_id" id="année_id" title="Année Scholaire">
		          @foreach($années as $année)
		          <option value="{{ $année->id }}" > {{ $année->titre}} </option> 
		          @endforeach
		        </select>
		      </div>
		    </div>

		     <div class="col-sm-6">
		      <div class="form-group select-wizard">
 		        <select class="selectpicker" data-size="7" data-style="select-with-transition" name="mois" title="Mois"> 
		          <option value="1"> Janvier </option>  
		          <option value="2"> Février </option>  
		          <option value="3"> Mars </option>  
		          <option value="4"> Avril </option>  
		          <option value="5"> Mai </option>  
		          <option value="6"> Juin </option>  
		          <option value="7"> Juillet</option>  
		          <option value="8"> Aout </option>  
		          <option value="9"> Septembre </option>  
		          <option value="10"> Octobre </option>  
		          <option value="11"> Novembre </option>  
		          <option value="12"> Décembre </option>  
	 	        </select>
		      </div>
		    </div>

		    <div class="col-sm-6">
		      <div class="form-group select-wizard">
 		        <select class="selectpicker" data-size="7" data-style="select-with-transition" name="mode" title="Mode"> 
		          <option value="cb"> Carte Bancaire </option> 
		          <option value="cheque"> Chèque </option> 
		          <option value="liquide" > Liquide </option> 
	 	        </select>
		      </div>
		    </div>

 	          <div class="col-sm-6">
	            <div class="form-group">
	              <input type="number" class="form-control" name="versement" placeholder="Versement : 1500 ">
	            </div>
	          </div>

	          <div class="col-sm-12">
	            <div class="form-group">
	                <textarea class="form-control" rows="5" name="description" placeholder="Description"></textarea>
	            </div>
	          </div>
 
	    </div>
 	
 	</div>

 </form>

    <div class="modal-footer justify-content-right">
      <button type="button" class="btn btn-danger btn-link" data-dismiss="modal">Close</button>
      <button type="submit" class="btn btn-rose" >Enregistrer</button>
    </div>
  
  
</div>
</div>
</div>