@extends('backend.master') 
@section('title','Contact-Nous')

@section('content') 

  
<h4 class="h4 mb-3">
<a href="{{url('/contacts')}}" title="Retour">
  <i class="align-middle me-2" data-feather="arrow-left-circle"></i>  
</a> 
     <strong>  Retour </strong>
</h4>        

<form method="post" action="{{url('/contact/'.$contact->id)}}"  >
{{ csrf_field() }}  
<input type="hidden" name="_method" value="PUT">

<div class="row">
    <div class="col-lg-12">
      <div class="card">
       
        <div class="card-header" style="background-color:#207CF3;">
          <h5 class="card-title mb-0" style="color: white;">Contact-Nous</h5>
        </div>
      
        <div class="card-body"> 
            <div class="row"> 

                <div class="col-sm-12">
                  <p class="text-muted">Name : </p> 
                      <input type="text" class="form-control mb-3" value="{{$contact->name}}" name="name" autocomplete="off" required>
                </div> 

                <div class="col-sm-12">
                  <p class="text-muted">Objet : </p> 
                  <select class="form-select mb-3" name="objet">
                        <option selected  disabled="true">Choisir : </option>
                        <option value="demande document"> demande document </option>
                        <option value="demande informations"> demande informations </option> 
                   </select> 
                </div> 

                <div class="col-sm-12">
                  <p class="text-muted">Email : </p> 
                      <input type="email" class="form-control mb-3" value="{{$contact->email}}" name="email" autocomplete="off" required>
                </div> 

                <div class="col-sm-12">
                  <p class="text-muted">Téléphone : </p> 
                      <input type="number" class="form-control mb-3" value="{{$contact->telephone}}" name="telephone" autocomplete="off" required>
                </div> 

                <div class="col-sm-12">
                  <p class="text-muted">Message : </p> 
                      <textarea class="form-control mb-3" rows="7" name="message">{{ $contact->message }}</textarea>
                </div> 

                <div class="col-sm-12">
		           				<input type="submit" class="btn btn-info" value="Valider">
                </div>

            </div>
        </div>

      </div>
    </div>
</div>

</form>
 
@endsection