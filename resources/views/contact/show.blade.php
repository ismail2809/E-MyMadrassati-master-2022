@extends('backend.master') 
@section('title','Détail Contact')

@section('content') 

<h4 class="h4 mb-3">
<a href="{{url('/contacts')}}" title="Retour">
  <i class="align-middle me-2" data-feather="arrow-left-circle"></i>  
</a> 
     <strong>  Retour </strong>
</h4>        

<div class="row">
  <div class="col-lg-12">
      <div class="card">
        <div class="card-header" style="background-color:#207CF3;">
          <h5 class="card-title mb-0" style="color: white;">Les informations de base</h5>
        </div>
        <div class="card-body"> 
            <div class="row">
                
                <div class="col-md-3">
                  <p class="text-muted">Name : </p>
                </div>

                <div class="col-md-9">
                     <strong> {{ $contact->name }}</strong>
                </div>

                <div class="col-md-3">
                  <p class="text-muted">Objet : </p>
                </div>

                <div class="col-md-9">
                     <strong> {{ $contact->objet }}</strong>
                </div>

                <div class="col-md-3">
                  <p class="text-muted">Email : </p>
                </div>

                <div class="col-md-9">
                     <strong> {{ $contact->email }}</strong>
                </div>

                <div class="col-md-3">
                  <p class="text-muted">Téléphone : </p>
                </div>

                <div class="col-md-9">
                     <strong> {{ $contact->telephone }}</strong>
                </div>

                <div class="col-md-3">
                  <p class="text-muted">Date : </p>
                </div>

                <div class="col-md-9">
                     <strong> {{ $contact->created_at->format('H:m d-m-Y') }}</strong>
                </div>

                <div class="col-md-3">
                  <p class="text-muted">Message : </p>
                </div>

                <div class="col-md-9">
                     <strong> {{ $contact->message }}</strong>
                </div>
            </div>
        </div>
      </div>
  </div>
</div>
@endsection