@extends('back.master') 
@section('title','Nouveau payment')

@section('content') 
<div class="row">

  <div class="col-md-12">
      <div class="card">

          <div class="card-header card-header-success card-header-text">
            <div class="card-text">
              <h4 class="card-title">Nouveau Payment</h4>
            </div>
          </div>

         <div class="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <i class="material-icons">close</i>
            </button>
            <span style="text-align: center;">
              <b>Numéro d'inscription: </b> {{ $inscription->num_inscription }}&nbsp;&nbsp; &nbsp; | &nbsp; &nbsp;&nbsp;
              <b>Modalité:</b> {{ $inscription->modalité }}  &nbsp;&nbsp; &nbsp; | &nbsp; &nbsp;&nbsp;
              <b>Tarif: </b> {{ $inscription->tarif }}        &nbsp;&nbsp;&nbsp; | &nbsp; &nbsp;&nbsp;
              <b>Reste à payé: </b> {{ ($inscription->tarif - $sum) }}        &nbsp;&nbsp;&nbsp;  &nbsp; &nbsp;&nbsp;
            </span>
         </div> 

      </div>
  </div>

<div class="col-md-12">
  <div class="card">
    <form method="post" action="{{url('/payment')}}" class="form-horizontal">         
          {{ csrf_field() }} 
      <input type="hidden" name="etudiant_id"    value="{{ $inscription->etudiant_id }}">
      <input type="hidden" name="inscription_id" value="{{ $inscription->id }}">
 
      <div class="card-body">             
         <div class="row">
          <label class="col-sm-2 col-form-label">Numéro d'inscription</label>
          <div class="col-sm-10">
            <div class="form-group">
              <input type="text" class="form-control" readonly="true" value="{{ $inscription->num_inscription }}">
            </div>
          </div>
        </div>

         <div class="row"> 
            <label class="col-sm-2 col-form-label">Année Scholaire</label>
            <div class="col-sm-10">
              <div class="form-group select-wizard"> 
                <select class="selectpicker" data-size="7" data-style="select-with-transition" name="annee_id" title="Année Scholaire"> 
                  @foreach($années as $année)
                  <option value="{{ $année->id }}"> {{ $année->titre}} </option> 
                  @endforeach
                </select>
              </div>
            </div> 
        </div>

        <div class="row"> 
           <label class="col-sm-2 col-form-label">Mois</label>
            <div class="col-sm-10">
              <div class="form-group select-wizard">
                <select class="selectpicker" data-size="7" data-style="select-with-transition" name="mois" title="Mois"> 
                  <option value="01"> Janvier </option>  
                  <option value="02"> Février </option>  
                  <option value="03"> Mars </option>  
                  <option value="04"> Avril </option>  
                  <option value="05"> Mai </option>  
                  <option value="06"> Juin </option>  
                  <option value="07"> Juillet</option>  
                  <option value="08"> Aout </option>  
                  <option value="09"> Septembre </option>  
                  <option value="10"> Octobre </option>  
                  <option value="11"> Novembre </option>  
                  <option value="12"> Décembre </option>  
                </select>
              </div>
            </div>
        </div>

         <div class="row"> 
           <label class="col-sm-2 col-form-label">Mode payment</label>
            <div class="col-sm-10">
              <div class="form-group select-wizard">
                 <select class="selectpicker" data-size="7" data-style="select-with-transition" name="mode" title="Mode payment">
                    <option value="Liquide">Liquide</option>
                    <option value="Cheque">Chèque</option> 
                    <option value="Carte_bancaire">Carte bancaire</option> 
                  </select>
              </div>
            </div> 
        </div>

         <div class="row">
          <label class="col-sm-2 col-form-label">Versement</label>
          <div class="col-sm-10">
            <div class="form-group">
              <input type="number" class="form-control" name="versement">
            </div>
          </div>
        </div>

         <div class="row">
          <label class="col-sm-2 col-form-label">Description </label>
          <div class="col-sm-10">
            <div class="form-group">
                <textarea class="form-control" rows="5" name="description"></textarea>
            </div>
          </div>
        </div> 

     </div>

     <div class="card-footer">
        <div class="ml-auto">
          <input type="submit" class="btn btn-info" value="Valider"  onclick="md.showNotification('bottom','right')">
        </div>
        <div class="clearfix"></div>
    </div>
  </form>

  </div>
</div>

@endsection