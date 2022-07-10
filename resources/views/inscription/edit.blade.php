@extends('backend.master')

@section('title','Modifier inscription')
@section('content') 
  
<h4 class="h4 mb-3">
<a href="{{url('/inscriptions/')}}" title="Retour">
  <i class="align-middle me-2" data-feather="arrow-left-circle"></i>  
</a> 
     <strong>Modifier Inscription </strong>
</h4>        

<form method="post" action="{{url('/inscription/'.$inscription->id)}}"  >
{{ csrf_field() }}  
<input type="hidden" name="_method" value="PUT">

<div class="row">
    <div class="col-12 col-lg-6">
      <div class="card">
        <div class="card-header" style="background-color:#207CF3;">
          <h5 class="card-title mb-0" style="color: white;">Les informations de base</h5>
        </div>
        <div class="card-body"> 
            <div class="row">
                <div class="col-sm-4">
                  <p class="text-muted">Numéro inscription:</p>
                </div>

                <div class="col-sm-8">
                   <input type="text" class="form-control mb-3"  value="{{ $inscription->num_inscription }}" name="num_inscription" autocomplete="off" required>
                </div>

                <div class="col-sm-4">
                  <p class="text-muted">Prénom : </p>
                </div>

                <div class="col-sm-8">
                       <input type="text" class="form-control mb-3"  value="{{ $inscription->etudiants->users->prenom }}" name="prenom" autocomplete="off" required>
                </div>

                <div class="col-sm-4">
                  <p class="text-muted">Nom : </p>
                </div>

                <div class="col-sm-8">
                       <input type="text" class="form-control mb-3"  value="{{ $inscription->etudiants->users->nom }}" name="nom" autocomplete="off" required>
                </div>

                <div class="col-sm-4">
                  <p class="text-muted">Email : </p>
                </div>

                <div class="col-sm-8">
                     <input type="email" class="form-control mb-3"  value="{{ $inscription->etudiants->users->email }}" name="email" autocomplete="off" readonly="true">
                </div>

                <div class="col-sm-4">
                  <p class="text-muted">Date de naissance : </p>
                </div>

                <div class="col-sm-8">
                     <input type="date" class="form-control mb-3"  value="{{ $inscription->etudiants->users->ddn }}" name="ddn">
                </div>

                <div class="col-sm-4">
                  <p class="text-muted">Lieu de naissance : </p>
                </div>

                <div class="col-sm-8">
                      <input type="text" class="form-control mb-3"  value="{{ $inscription->etudiants->users->lieu_naissance }}" name="lieu_naissance">
                </div>              

                <div class="col-sm-4">
                  <p class="text-muted">Téléphone : </p>
                </div>

                <div class="col-sm-8">
                     <input type="number" class="form-control mb-3"  value="{{ $inscription->etudiants->users->tel }}" name="tel">
                </div>


                <div class="col-sm-4">
                  <p class="text-muted">Sexe : </p>
                </div>

                <div class="col-sm-8">
                   <select class="form-select mb-3" name="sexe">
                    @if($inscription->etudiants->users->sexe == 'Homme')
                      <option value="{{$inscription->etudiants->users->sexe}}" selected> Homme </option> 
                      <option value="Femme" > Femme </option>
                       @else
                      <option value="Homme" > Homme </option> 
                      <option value="{{$inscription->etudiants->users->sexe}}" selected> Femme </option> 
                    @endif
                  </select>
                </div>

                <div class="col-sm-4">
                  <p class="text-muted">Adresse : </p>
                </div>

                <div class="col-sm-8">
                      <textarea class="form-control mb-3" rows="7" name="adresse">{{ $inscription->etudiants->users->adresse }}</textarea>
                </div> 
            </div>
        </div>
      </div>
    </div>
    <div class="col-12 col-lg-6">
      <div class="card">
        <div class="card-header" style="background-color:orange;">
          <h5 class="card-title mb-0" style="color: white;">Les informations de scolarité</h5>
        </div>
        <div class="card-body">
          <div class="row">
                <div class="col-sm-4">
                  <p class="text-muted">Année scolaire : </p>
                </div>

                <div class="col-sm-8">
                     <select class="form-select mb-3" name="année_id" title="Année Scholaire" required>  
                     @foreach($années as $année)
                            @if($inscription->annee_id == $année->id)
                                  <option value="{{ $année->id }}" selected >{{ $année->titre }}</option>
                              @else
                                  <option value="{{ $année->id }}" >{{ $année->titre }}</option>
                            @endif
                       @endforeach
                      </select>
                </div>

                <div class="col-sm-4">
                  <p class="text-muted">Classe : </p>
                </div>

                <div class="col-sm-8">
                     <select class="form-select mb-3" name="classe_id" title="Classe" required>  
                      @foreach($classes as $classe)
                        @if($inscription->classe_id == $classe->id)
                            <option value="{{ $classe->id }}" selected >{{ $classe->titre }}</option>
                        @else
                            <option value="{{ $classe->id }}" >{{ $classe->titre }}</option>
                        @endif
                       @endforeach 
                     </select>
                </div>
                  
            </div>

        </div>
      </div>
            
      <div class="card">   

        <div class="card-header" style="background-color:#1cbb8c;">
          <h5 class="card-title mb-0" style="color: white;">Les informations du Payment</h5>
        </div>

        <div class="card-body">
            <div class="row">
                 
                <div class="col-sm-4">
                  <p class="text-muted">Modalité : </p>
                </div>

                <div class="col-sm-8">
                      <select class="form-select mb-3" name="modalité" title="Modalité" required>  
                        <option value="Mensuel" {{ ( $inscription->modalité == 'Mensuel') ? 'selected' : '' }}> Mensuel </option>
                        <option value="Trimestriel" {{ ( $inscription->modalité == 'Trimestriel') ? 'selected' : '' }}> Trimestriel </option> 
                        <option value="Annuel" {{ ( $inscription->modalité == 'Annuel') ? 'selected' : '' }}> Annuel </option>
                      </select> 
                </div>

                <div class="col-sm-4">
                  <p class="text-muted">Tarif : </p>
                </div>

                <div class="col-sm-8">
                    <input type="number" class="form-control mb-3" value="{{ $inscription->tarif }}" name="tarif" required>
                </div>

                <div class="col-sm-4">
                  <p class="text-muted">Transport : </p>
                </div>

                <div class="col-sm-8">
                   <select class="form-select mb-3" name="transport" title="Transport">
                       @if($inscription->transport == 'Oui')
                              <option value="{{$inscription->transport}}" selected> {{$inscription->transport}} </option> 
                              <option value="Non"> Non </option> 
                              @else
                              <option value="{{$inscription->transport}}" selected> {{$inscription->transport}} </option>              
                              <option value="Oui"> Oui </option> 
                          @endif                        
                    </select>
                </div>

                <div class="col-sm-4">
                  <p class="text-muted">Cantine : </p>
                </div>

                <div class="col-sm-8">
                  <select class="form-select mb-3" name="cantine" title="Cantine">
                     @if($inscription->cantine == 'Oui')
                          <option value="{{$inscription->cantine}}" selected> {{$inscription->cantine}} </option> 
                          <option value="Non"> Non </option> 
                          @else
                          <option value="{{$inscription->cantine}}" selected> {{$inscription->cantine}} </option>                         
                          <option value="Oui"> Oui </option> 
                      @endif                         
                  </select>
                </div>
          </div>                  
        </div>
        </div>
      </div> 
</div>

<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header" style="background-color:lightslategrey;">
          <h5 class="card-title mb-0" style="color: white;">Les informations du Tuteur</h5>
        </div>
        <div class="card-body">  
            <div class="row">
                <div class="col-sm-4">
                  <p class="text-muted">Prénom : </p>
                </div>

                <div class="col-sm-8">
                    <input type="text" class="form-control mb-3" name="prenom_tuteur" value="{{ $inscription->etudiants->prenom_tuteur }}" >
                </div>

                <div class="col-sm-4">
                  <p class="text-muted">Nom : </p>
                </div>

                <div class="col-sm-8">
                    <input type="text" class="form-control mb-3" name="nom_tuteur" value="{{ $inscription->etudiants->nom_tuteur }}" >
                </div>

                <div class="col-sm-4">
                  <p class="text-muted">Téléphone : </p>
                </div>

                <div class="col-sm-8">
                    <input type="number" class="form-control mb-3" name="tel_tuteur" value="{{ $inscription->etudiants->tel_tuteur }}" >
                </div>
                
                <div class="col-sm-4">
                  <p class="text-muted">Email : </p>
                </div>

                <div class="col-sm-8">
                    <input type="email" class="form-control mb-3" name="email_tuteur" value="{{ $inscription->etudiants->email_tuteur }}" >
                </div>
                
                <div class="col-sm-4">
                  <p class="text-muted">Sexe : </p>
                </div>

                <div class="col-sm-8">
                  <select class="form-select mb-2" name="sexe_tuteur" title="Sexe">
                      @if($inscription->etudiants->sexe_tuteur == 'Homme')
                        <option value="{{$inscription->etudiants->sexe_tuteur}}" selected> Homme </option> 
                        <option value="Femme" > Femme </option>
                         @else
                        <option value="Homme" > Homme </option> 
                        <option value="{{$inscription->etudiants->sexe_tuteur}}" selected> Femme </option> 
                      @endif 
                  </select>
                </div>
                
                <div class="col-sm-4">
                  <p class="text-muted">Profession : </p>
                </div>

                <div class="col-sm-8">
                   <input type="text" class="form-control mb-3" name="profession_tuteur" value="{{ $inscription->etudiants->profession_tuteur }}" >
                </div>                 
            </div> 
            <div class="row">
              <div class="col-sm-2">
                  <input type="submit" class="btn btn-warning" value="Modifier">                
              </div>
            </div>
        </div>
      </div>
    </div> 
</div> 
</form>

@endsection        