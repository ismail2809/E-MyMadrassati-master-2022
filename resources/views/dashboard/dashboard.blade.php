@extends('back.master')
@section('title','Tableau de bord')

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

  <div class="col-lg-3 col-md-6">
    <div class="card card-stats">
      <div class="card-header card-header-warning card-header-icon">
        <div class="card-icon">
          <i class="material-icons">contact_mail</i>
        </div>
        <p class="card-category">Inscriptions / étudiants</p>
        <h3 class="card-title">{{ $nb_etudiants }}</h3>
      </div>
      <div class="card-footer">
        <div class="stats">
          <i class="material-icons">visibility</i> <a href="{{ url('/inscriptions') }}">voir</a>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-md-6">
    <div class="card card-stats">
      <div class="card-header card-header-rose card-header-icon">
        <div class="card-icon">
          <i class="material-icons">equalizer</i>
        </div>
        <p class="card-category">Payments annuelle</p>
        <h3 class="card-title">{{ $sumPayment }}</h3>

      </div>
      <div class="card-footer">
        <div class="stats">
          <i class="material-icons">visibility</i> <a href="{{ url('/payments') }}">voir</a>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-md-6">
    <div class="card card-stats">
      <div class="card-header card-header-success card-header-icon">
        <div class="card-icon">
          <i class="material-icons">equalizer</i>
        </div>
        <p class="card-category">Payments mensuelle</p>
        <h3 class="card-title">{{ $sumPaymentMonth }}</h3>

      </div>
      <div class="card-footer">
        <div class="stats">
          <i class="material-icons">visibility</i> <a href="{{ url('/payments') }}">voir</a>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-md-6">
    <div class="card card-stats">
      <div class="card-header card-header-info card-header-icon">
        <div class="card-icon">
          <i class="material-icons">equalizer</i>
        </div>
        <p class="card-category">Payments hebdomadaire</p>
        <h3 class="card-title">{{ $sumPaymentDay  }}</h3>

      </div>
      <div class="card-footer">
        <div class="stats">
          <i class="material-icons">visibility</i> <a href="{{ url('/payments') }}">voir</a>
        </div>
      </div>
    </div>
  </div>
</div>
 

<div class="row">
 <div class="col-lg-6">
      <div class="panel panel-default">
          <div class="panel-body">
              {!! $chart_users->html() !!} 
          </div>
      </div>
  </div>

  <div class="col-lg-6">
      <div class="panel panel-default">
          <div class="panel-body">
          {!! $chart_payments_month->html() !!} 
          </div>
      </div>
  </div> 
</div> 
<br>

<div class="row">
  <div class="col-lg-12">     
        <div class="card">
      <div class="card-header card-header-info"> 
        <h4 class="card-title">Liste des Payments</h4>
      </div>

      <div class="card-body">
           <div class="material-datatables"> 

          <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
            <thead>
              <tr>
                <th style="color: red"><b>Numero d'inscription</b></th>
                <th style="color: red"><b>Prénom Nom</b></th> 
                <th style="color: red"><b>Mode</b></th>
                <th style="color: red"><b>Mois</b></th>
                <th style="color: red"><b>versement</b></th>
                <th style="color: red"><b>Année</b></th>  
                <th style="color: red"><b>Description</b></th>  
                <th style="color: red"><b>Création</b></th>   
                <th style="color: red"><b>actions</b></th>
              </tr>
            </thead> 
            <tbody>
              @foreach($payments as $payment)
              <tr>
                <td>{{ $payment->inscriptions['num_inscription'] }}</td> 
                <td>{{ $payment->etudiants->users->prenom }} {{ $payment->etudiants->users->nom }}</td> 
                <td>{{ $payment->mode }}</td> 
                <td>{{ $payment->mois }}</td> 
                <td>{{ $payment->versement }}</td> 
                <td>{{ $payment->années->titre }}</td> 
                <td>{{ $payment->description }}</td> 
                <td>{{ isset($payment->created_at)?$payment->created_at->format('d-m-Y'):$payment->created_at }}</td> 
                <td class="td-actions text-center">
                  <a href="{{url('/payment/'.$payment->id.'/détail')}}"  class="btn btn-info btn-round" title="détail"><i class="material-icons">remove_red_eye</i> 
                    </a> 
                  </td>              
              </tr>
              </tr>              
              @endforeach       
            </tbody>
          </table>

        </div>
        </div>
    </div> 
</div>

<div class="row">
  <div class="col-lg-6">     
    <div class="panel-body">

    </div>       
  </div> 

  <div class="col-lg-6">  
      <div class="panel-body">

      </div>       
  </div>
</div>
<br>

<div class="row">
  <div class="col-lg-12">     
        <div class="panel-body">

        </div>
    </div> 
</div>

<h3>Manage Listings</h3>
<br>
<div class="row">
  <div class="col-md-3">
    <div class="card card-product">
      <div class="card-header card-header-image" data-header-animation="true">
        <a href="#pablo">
          <img class="img" src="{{ asset('back/assets/img/school/crèche.jpg') }}">
        </a>
      </div>
      <div class="card-body"> 
        <h4 class="card-title">
          <a href="#pablo"> Emploi du temps </a>
        </h4> 
      </div> 
    </div>
  </div>
  <div class="col-md-3">
    <div class="card card-product">
      <div class="card-header card-header-image" data-header-animation="true">
        <a href="#pablo">
          <img class="img" src="{{ asset('back/assets/img/school/primaire.jpg') }}">
        </a>
      </div>
      <div class="card-body"> 
        <h4 class="card-title">
          <a href="#pablo"> Absences </a>
        </h4> 
      </div> 
    </div>
  </div>
  <div class="col-md-3">
    <div class="card card-product">
      <div class="card-header card-header-image" data-header-animation="true">
        <a href="#pablo">
          <img class="img" src="{{ asset('back/assets/img/school/collège.jpg') }}">
        </a>
      </div>
      <div class="card-body"> 
        <h4 class="card-title">
          <a href="#pablo"> Notes </a>
        </h4> 
      </div> 
    </div>
  </div>
  <div class="col-md-3">
    <div class="card card-product">
      <div class="card-header card-header-image" data-header-animation="true">
        <a href="#pablo">
          <img class="img" src="{{ asset('back/assets/img/school/lycée.jpg') }}">
        </a>
      </div>
      <div class="card-body"> 
        <h4 class="card-title">
          <a href="#pablo"> Demande document </a>
        </h4> 
      </div> 
    </div>
  </div>
</div> 


{!! Charts::scripts() !!}
{!! $chart_users->script() !!}

 {!! $chart_payments_month->script() !!}


@endsection