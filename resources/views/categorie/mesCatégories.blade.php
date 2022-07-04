@extends('back.master')
@section('title','Mes Catégories')

@section('content') 
 
<div class="row justify-content-center">
 
 @foreach($categories as $categorie) 
  <div class="col-md-4">
    <div class="card card-product">
      <div class="card-header card-header-image" data-header-animation="true">
        <a href="{{ url('/categorie/'.$categorie->categories->id.'/classes') }}">
          <img class="img" src="{{ asset('back/assets/img/school/'.$categorie->categories->titre.'.jpg') }}">
        </a>
      </div>
      <div class="card-body"> 
        <h4 class="card-title">
          <a href="{{ url('/categorie/'.$categorie->categories->id.'/classes') }}" >
          <b style="color:gray;"> {{ $categorie->categories->titre }} </b> <span class="material-icons"> double_arrow</span> {{ $categorie->categories->niveau }}</a>
        </h4> 
      </div> 
    </div>
  </div> 
  @endforeach

</div>	
@endsection