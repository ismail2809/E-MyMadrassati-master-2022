@extends('back.master') 
@section('title','Editer payment')

@section('content') 
<div class="row">

<div class="col-md-12">
 <div class="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <i class="material-icons">close</i>
    </button>
    <span style="text-align: center;">
      <b>Numéro d'inscription: </b> {{ $inscription->num_inscription }}&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
      <b>Modalité:</b> {{ $inscription->modalité }}  &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
      <b>Tarif: </b> {{ $inscription->tarif }}        &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;
      <b>Reste à payé: </b> {{ ($inscription->tarif - $sum) }}        &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;
    </span>
 </div>
</div>

<div class="col-md-12">
  <div class="card ">
    <div class="card-header card-header-warning card-header-text">
      <div class="card-text">
        <h4 class="card-title">Editer Payment</h4>
      </div>
    </div>
    <form method="post" action="{{url('/payment/'.$payment->id)}}" class="form-horizontal">         
              {{ csrf_field() }}  
              <input type="hidden" name="_method" value="PUT">
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
                  <option value="{{ $année->id }}" {{ ( $payment->annee_id == $année->id ) ? 'selected' : '' }}> {{ $année->titre}} </option> 
                  @endforeach
                </select>
              </div>
            </div> 
        </div>

         <div class="row"> 
           <label class="col-sm-2 col-form-label">Mode payment</label>
            <div class="col-sm-10">
              <div class="form-group select-wizard">
                 <select class="selectpicker" data-size="7" data-style="select-with-transition" name="mode" title="Mode payment">
                    <option value="Liquide" {{ ( $payment->mode == 'Liquide') ? 'selected' : '' }}>Liquide</option>
                    <option value="Cheque"  {{ ( $payment->mode == 'Cheque') ? 'selected' : '' }}>Chèque</option> 
                    <option value="Carte_bancaire" {{ ( $payment->mode == 'Carte_bancaire') ? 'selected' : '' }}>Carte bancaire</option> 
                  </select>
              </div>
            </div> 
        </div>

        <div class="row"> 
           <label class="col-sm-2 col-form-label">Mois</label>
            <div class="col-sm-10">
              <div class="form-group select-wizard">
                 <select class="selectpicker" data-size="7" data-style="select-with-transition" name="mois" title="Mois"> 
                  <option value="01" {{ ( $payment->mois == '01') ? 'selected' : '' }}> Janvier </option>  
                  <option value="02" {{ ( $payment->mois == '02') ? 'selected' : '' }}> Février </option>  
                  <option value="03" {{ ( $payment->mois == '03') ? 'selected' : '' }}> Mars </option>  
                  <option value="04" {{ ( $payment->mois == '04') ? 'selected' : '' }}> Avril </option>  
                  <option value="05" {{ ( $payment->mois == '05') ? 'selected' : '' }}> Mai </option>  
                  <option value="06" {{ ( $payment->mois == '06') ? 'selected' : '' }}> Juin </option>  
                  <option value="07" {{ ( $payment->mois == '07') ? 'selected' : '' }}> Juillet</option>  
                  <option value="08" {{ ( $payment->mois == '08') ? 'selected' : '' }}> Aout </option>  
                  <option value="09" {{ ( $payment->mois == '09') ? 'selected' : '' }}> Septembre </option>  
                  <option value="10" {{ ( $payment->mois == '10') ? 'selected' : '' }}> Octobre </option>  
                  <option value="11" {{ ( $payment->mois == '11') ? 'selected' : '' }}> Novembre </option>  
                  <option value="12" {{ ( $payment->mois == '12') ? 'selected' : '' }}> Décembre </option>  
                </select>
              </div>
            </div> 
        </div>

         <div class="row">
          <label class="col-sm-2 col-form-label">Versement</label>
          <div class="col-sm-10">
            <div class="form-group">
              <input type="number" class="form-control" name="versement" value="{{ $payment->versement }}">
            </div>
          </div>
        </div>

         <div class="row">
          <label class="col-sm-2 col-form-label">Description </label>
          <div class="col-sm-10">
            <div class="form-group">
                <textarea class="form-control" rows="5" name="description">{{ $payment->description }}</textarea>
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

</option>
@endsection