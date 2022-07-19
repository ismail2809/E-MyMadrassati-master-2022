<nav id="sidebar" class="sidebar js-sidebar">
	<div class="sidebar-content js-simplebar">
		<a class="sidebar-brand" href="{{ url('/') }}">
 			 <span class="align-middle">E-madrassati</span>
		</a>

		<ul class="sidebar-nav">
			<li class="sidebar-header">
				Pages
			</li>

			<li class="sidebar-item">
				<a class="sidebar-link" href="{{ url('/') }}">
     			 <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
    			</a>
			</li> 

			<li class="sidebar-item">
				<a class="sidebar-link" href="{{ url('/inscriptions') }}">
			      <i class="align-middle" data-feather="folder"></i> <span class="align-middle">Inscriptions</span>
			    </a>
			</li>

			<li class="sidebar-item">
				<a class="sidebar-link" href="{{ url('/renouvelements') }}">
			      <i class="align-middle" data-feather="refresh-cw"></i> <span class="align-middle">Renouvelements</span>
			    </a>
			</li>

			<li class="sidebar-item">
				<a class="sidebar-link" href="{{ url('/paiements') }}">
			      <i class="align-middle" data-feather="dollar-sign"></i> <span class="align-middle">Paiements</span>
			    </a>
			</li>

			<li class="sidebar-header">
				Gestion de scolarité
			</li>

			<li class="sidebar-item">
				<a class="sidebar-link" href="{{ url('/classes/liste') }}">
			      <i class="align-middle" data-feather="users"></i> <span class="align-middle">Les Classes</span>
			    </a>
			</li>

			<li class="sidebar-item">
				<a class="sidebar-link" href="{{ url('/liste_absences') }}">
			      <i class="align-middle" data-feather="clock"></i> <span class="align-middle">Absence</span>
			    </a>
			</li>

			<li class="sidebar-item">
				<a class="sidebar-link" href="{{ url('/liste_notes') }}">
			      <i class="align-middle" data-feather="edit"></i> <span class="align-middle">Note</span>
			    </a>
			</li>

			<li class="sidebar-item">
				<a class="sidebar-link" href="{{ url('/emplois') }}">
			      <i class="align-middle" data-feather="calendar"></i> <span class="align-middle">Emploi du temps</span>
			    </a>
			</li>

			<li class="sidebar-header">
				Gestion des utlisateurs
			</li>

			<li class="sidebar-item">
				<a class="sidebar-link" href="{{ route('users.index') }}">
			      <i class="align-middle" data-feather="users"></i> <span class="align-middle">Les utlisateurs</span>
			    </a>
			</li>

			<li class="sidebar-item">
				<a class="sidebar-link" href="{{ route('roles.index') }}">
			      <i class="align-middle" data-feather="shield"></i> <span class="align-middle">Roles</span>
			    </a>
			</li>

			<li class="sidebar-header">
				Paramètre
			</li>

			<li class="sidebar-item">
				<a class="sidebar-link" href="{{ url('/années') }}">
			      <i class="align-middle" data-feather="circle"></i> <span class="align-middle">Année scolaire</span>
			    </a>
			</li>

			<li class="sidebar-item">
				<a class="sidebar-link" href="{{ url('/categories') }}">
			      <i class="align-middle" data-feather="more-horizontal"></i> <span class="align-middle">Catégorie</span>
			    </a>
			</li>

			<li class="sidebar-item">
				<a class="sidebar-link" href="{{ url('/niveaux') }}">
			      <i class="align-middle" data-feather="align-justify"></i> <span class="align-middle">Niveau</span>
			    </a>
			</li>

			<li class="sidebar-item">
				<a class="sidebar-link" href="{{ url('/classes') }}">
			      <i class="align-middle" data-feather="grid"></i> <span class="align-middle">Classe</span>
			    </a>
			</li>

			<li class="sidebar-item">
				<a class="sidebar-link" href="{{ url('/matieres') }}">
			      <i class="align-middle" data-feather="book"></i> <span class="align-middle">Matière</span>
			    </a>
			</li>

			<li class="sidebar-item">
				<a class="sidebar-link" href="{{ url('/type_paiements') }}">
			      <i class="align-middle" data-feather="package"></i> <span class="align-middle">Les types paiements</span>
			    </a>
			</li>


			<li class="sidebar-header">
				Contact
			</li>

			<li class="sidebar-item">
				<a class="sidebar-link" href="{{ url('/contact/new') }}">
			      <i class="align-middle" data-feather="mail"></i> <span class="align-middle">Contactez-nous</span>
			    </a>
			</li> 

			<li class="sidebar-item">
				<a class="sidebar-link" href="#">
			      <i class="align-middle" data-feather="help-circle"></i> <span class="align-middle"> Centre d'aide</span>
			    </a>
			</li> 
		</ul>			 
		 
	</div>
</nav>