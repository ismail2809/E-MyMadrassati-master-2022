@extends('backend.master')

@section('title','Attestation du paiement')
@section('content')  

	<h1 class="h3 mb-3">Invoice</h1>

	<div class="row">
		<div class="col-12">
			<div class="card">

				<div class="card-title m-sm-3 m-md-5">
					<img src="{{ asset('backend/img/icons/icon-48x48.png') }}">
				</div>

				<div class="card-body m-sm-3 m-md-5">
					<div class="mb-4">
						Hello <strong>{{ $response->etudiants->users->prenom }} {{ $response->etudiants->users->nom }}</strong>,
						<br />
						This is the receipt for a payment of <strong>$268.00</strong> (USD) you made to AdminKit Demo.
					</div>

					<div class="row">
						<div class="col-md-6">
							<div class="text-muted">Payment No.</div>
							<strong>{{ $response->etudiants->users->tel }}</strong>
						</div>
						<div class="col-md-6 text-md-end">
							<div class="text-muted">Payment Date</div>
							<strong>{{ $historiques[0]->created_at->format('d-M-Y h:m') }}</strong>
						</div>
					</div>

					<hr class="my-4" />

					<div class="row mb-4">
						<div class="col-md-6">
							<div class="text-muted">Client</div>
							<strong>
								{{ $response->etudiants->users->prenom }} {{ $response->etudiants->users->nom }}
							</strong>
							<p>
								 {{ $response->etudiants->users->adresse }} <br>
								<a href="#">
									 {{ $response->etudiants->users->email }}
								</a>
							</p>
						</div>
						<div class="col-md-6 text-md-end">
							<div class="text-muted">Payment To</div>
							<strong>
								AdminKit Demo LLC
							</strong>
							<p>
								354 Roy Alley <br>
								Denver <br>
								80202 <br>
								USA <br>
								<a href="#">
									info@adminkit.com
								</a>
							</p>
						</div>
					</div>

					<table class="table table-sm">
						<table id="nosearching" class="table table-striped table-bordered nowrap" style="width:100%">
                  <thead>
                    <tr> 
                      <th style="text-align: center;">ID</th>  
                      <th style="text-align: center;">Type tarif</th> 
                      <th style="text-align: center;">Versement</th> 
                      <th style="text-align: center;">Mode </th> 
                      <th style="text-align: center;">Mois</th> 
                      <th style="text-align: center;">Description</th>                        
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($historiques as $historique)
                    <tr>
                     <td style="text-align: center;">{{ $historique->id }}</th>      
                     <td style="text-align: center;">{{ $historique->type_paiements->titre  }}</th>                 
                     <td style="text-align: center;">{{ $historique->versement }}</th>                 
                     <td style="text-align: center;">{{ $historique->mode }}</th>                 
                     <td style="text-align: center;">{{ $historique->mois }}</th>                       
                     <td style="text-align: center;">{{ $historique->description }}</th>   
                
                    </tr>
                    @endforeach
                  </tbody>
  
					</table>

					<div class="text-center">
						<button class="btn btn-info" onclick="window.print()">Print</button>					 
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection	