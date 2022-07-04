@extends('back.master')
@section('title','Paramètre')

@section('content') 
<h4> <span class="material-icons"> groups  </span> Utilisateurs</h4>
<br>
<div class="row">

   <div class="col-md-4">
    <div class="card card-product">
      <div class="card-header card-header-image" data-header-animation="true">
        <a href="#pablo">
          <img class="img" src="{{ asset('back/assets/img/parametre/agents.jpg') }}">
        </a>
      </div>
      <div class="card-body">  
         <div class="card-actions"> 
              <a href="{{ url('/agents') }}"  class="btn btn-info btn-simple" >  
                <span class="material-icons">list</span> Agent
              </a>
              <a href="{{ url('agent/new') }}"  class="btn btn-info btn-simple" >  
                <span class="material-icons">add_circle</span> Ajouter
              </a>
        </div>
      </div> 
    </div>
  </div>

  <div class="col-md-4">
    <div class="card card-product">
      <div class="card-header card-header-image" data-header-animation="true">
        <a href="#pablo">
          <img class="img" src="{{ asset('back/assets/img/parametre/professeurs.jpg') }}">
        </a>
      </div>
      <div class="card-body">  
         <div class="card-actions"> 
              <a href="{{ url('/professeurs') }}"  class="btn btn-info btn-simple" >  
                <span class="material-icons">list</span> Professeurs
              </a>
              <a href="{{ url('professeur/new') }}"  class="btn btn-info btn-simple" >  
                <span class="material-icons">add_circle</span> Ajouter
              </a>
        </div>
      </div> 
    </div>
  </div>
 
   <div class="col-md-4">
    <div class="card card-product">
      <div class="card-header card-header-image" data-header-animation="true">
        <a href="#pablo">
          <img class="img" src="{{ asset('back/assets/img/parametre/users.jpg') }}">
        </a>
      </div>
      <div class="card-body">  
         <div class="card-actions"> 
              <a href="{{ url('/admins') }}"  class="btn btn-info btn-simple" >  
                <span class="material-icons">list</span> Admin
              </a>
              <a href="{{ url('admin/new') }}"  class="btn btn-info btn-simple" >  
                <span class="material-icons">add_circle</span> Ajouter
              </a>
        </div>
      </div> 
    </div>
  </div>
 
   <div class="col-md-4">
    <div class="card card-product">
      <div class="card-header card-header-image" data-header-animation="true">
        <a href="#pablo">
          <img class="img" src="{{ asset('back/assets/img/parametre/password.jpg') }}">
        </a>
      </div>
      <div class="card-body">  
         <div class="card-actions"> 
              <a href="{{ url('/users') }}"  class="btn btn-warning btn-simple" >  
                <span class="material-icons">edit</span> Mot de passe
              </a> 
        </div>
      </div> 
    </div>
  </div>
</div>


<h4> <span class="material-icons"> school </span> Scholarité</h4>
<br>
<div class="row">
  <div class="col-md-4">
    <div class="card card-product">
      <div class="card-header card-header-image" data-header-animation="true">
        <a href="#pablo">
          <img class="img" src="{{ asset('back/assets/img/school/year.jpg') }}">
        </a>
      </div>
      <div class="card-body">  
         <div class="card-actions"> 
              <a href="{{ url('/années') }}"  class="btn btn-info btn-simple" >  
                <span class="material-icons">list</span> Année scolaire
              </a>
              <a href="{{ url('année/new') }}"  class="btn btn-info btn-simple" >  
                <span class="material-icons">add_circle</span> Ajouter
              </a>
        </div>
      </div> 
    </div>
  </div>


  <div class="col-md-4">
    <div class="card card-product">
      <div class="card-header card-header-image" data-header-animation="true">
        <a href="#pablo">
          <img class="img" src="{{ asset('back/assets/img/school/lycée.jpg') }}">
        </a>
      </div>
      <div class="card-body">  
        <div class="card-actions"> 
              <a href="{{ url('/classes') }}"  class="btn btn-info btn-simple" >  
                <span class="material-icons">list</span> Classe
              </a>
              <a href="{{ url('classe/new') }}"  class="btn btn-info btn-simple" >  
                <span class="material-icons">add_circle</span> Ajouter
              </a>
          </div> 
      </div> 
    </div>
  </div>
  
  <div class="col-md-4">
    <div class="card card-product">
      <div class="card-header card-header-image" data-header-animation="true">
        <a href="#pablo">
          <img class="img" src="{{ asset('back/assets/img/school/crèche.jpg') }}">
        </a>
      </div>
      <div class="card-body">  
        <div class="card-actions"> 
              <a href="{{ url('/matieres') }}"  class="btn btn-info btn-simple" >  
                <span class="material-icons">list</span> Matière
              </a>
              <a href="{{ url('matiere/new') }}"  class="btn btn-info btn-simple" >  
                <span class="material-icons">add_circle</span> Ajouter
              </a>
          </div> 
      </div> 
    </div>
  </div>

  <div class="col-md-4">
    <div class="card card-product">
      <div class="card-header card-header-image" data-header-animation="true">
        <a href="#pablo">
          <img class="img" src="{{ asset('back/assets/img/school/primaire.jpg') }}">
        </a>
      </div>
      <div class="card-body">          
        <div class="card-actions"> 
              <a href="{{ url('/categories') }}"  class="btn btn-info btn-simple" >  
                <span class="material-icons">list</span> Catégorie
              </a>
              <a href="{{ url('categorie/new') }}"  class="btn btn-info btn-simple" >  
                <span class="material-icons">add_circle</span> Ajouter
              </a>
          </div> 
      </div> 
    </div>
  </div>
  
  <div class="col-md-4">
    <div class="card card-product">
      <div class="card-header card-header-image" data-header-animation="true">
        <a href="#pablo">
          <img class="img" src="{{ asset('back/assets/img/school/collège.jpg') }}">
        </a>
      </div>
      <div class="card-body">
          <div class="card-actions"> 
              <a href="{{ url('/niveaux') }}"  class="btn btn-info btn-simple" >  
                <span class="material-icons">list</span> Niveaux
              </a>
              <a href="{{ url('niveau/new') }}"  class="btn btn-info btn-simple" >  
                <span class="material-icons">add_circle</span> Ajouter
              </a>
          </div>           
       
        <h4 class="card-title">
          
        </h4> 
      </div> 
    </div>
  </div>
 
 </div> 


@endsection