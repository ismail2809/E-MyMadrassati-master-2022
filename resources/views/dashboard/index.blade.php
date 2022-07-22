@extends('backend.master')

@section('title','Les matières')
@section('content')
<h1 class="h3 mb-3">
<strong><i class="align-middle me-2" data-feather="bar-chart-2"></i>Tableau de bord </strong> </h1>
<div class="row">
				<div class="col-sm-3">					
					<div class="card">
						<div class="card-body">
							<div class="row">
								<div class="col mt-0">
									<h5 class="card-title">Paiements mensuelles</h5>
								</div>

								<div class="col-auto">
									<div class="stat text-primary">
										<i class="align-middle" data-feather="dollar-sign"></i>
									</div>
								</div>
							</div>	
							<h1 class="mt-1 mb-3">{{ $sumPaymentMonth }}</h1>														
						</div>
					
					</div>
				</div>
				
				<div class="col-sm-3">
				
					<div class="card">
						<div class="card-body">
							<div class="row">
								<div class="col mt-0">
									<h5 class="card-title">Etudiants</h5>
								</div>

								<div class="col-auto">
									<div class="stat text-primary">
										<i class="align-middle" data-feather="users"></i>
									</div>
								</div>
							</div>
							<h1 class="mt-1 mb-3">{{ $nb_etudiants }}</h1>							
						</div>
					</div>

				</div>

				<div class="col-sm-3">
					
					<div class="card">
						<div class="card-body">
							<div class="row">
								<div class="col mt-0">
									<h5 class="card-title">Professeurs</h5>
								</div>

								<div class="col-auto">
									<div class="stat text-primary">
										<i class="align-middle" data-feather="briefcase"></i>
									</div>
								</div>
							</div>			
							<h1 class="mt-1 mb-3">{{ $professeurs }}</h1>							
						</div>
					
					</div>
				</div>
				
				<div class="col-sm-3">
				
					<div class="card">
						<div class="card-body">
							<div class="row">
								<div class="col mt-0">
									<h5 class="card-title">Classes</h5>
								</div>

								<div class="col-auto">
									<div class="stat text-primary">
										<i class="align-middle" data-feather="book-open"></i>
									</div>
								</div>
							</div>
							<h1 class="mt-1 mb-3">{{ $nb_classes }}</h1>							
						</div>
					</div>

				</div>				
			</div>


<div class="row">		
<div class="card flex-fill w-100">
	<div class="card-header">

		<h5 class="card-title mb-0">Paiements mensuelles</h5>
	</div>
	<div class="card-body d-flex w-100">
		<div class="align-self-center chart chart-lg">
			<div class="row"> 

 			      <div class="panel panel-default">
			          <div class="panel-body">
			          {!! $chart_payments_month->html() !!} 
			          </div>
			      </div>
		 
			</div>  
		</div>
	</div>
</div>		 
</div>
{!! Charts::scripts() !!} 
{!! $chart_payments_month->script() !!}
@endsection	