@extends('back.master')

@section('title','Nouvelle  Inscription')
@section('content') 
 
<div class="mr-auto ml-auto">
    <!--      Wizard container        -->
    <div class="wizard-container">
      <div class="card card-wizard" data-color="green" id="wizardProfile">
        <form method="post" action="{{url('/inscription')}}" enctype="multipart/form-data" >
          {{ csrf_field() }} 
          <!--        You can switch " data-color="primary" "  with one of the next bright colors: "green", "orange", "red", "blue"       -->

            <div class="card-header text-center">
              <h3 class="card-title">Création du compte</h3>
            </div>

            <div class="wizard-navigation">
              <ul class="nav nav-pills">
                <li class="nav-item">
                  <a class="nav-link active" href="#about" data-toggle="tab" role="tab">
                    Info Etudiant
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#account" data-toggle="tab" role="tab">
                    Détail
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#address" data-toggle="tab" role="tab">
                    Scolarité
                  </a>
                </li>
              </ul>
            </div>

            <div class="card-body">

              <div class="tab-content">
              
                <div class="tab-pane active" id="about">
                  <h5 class="info-text"> Les informations de base</h5>
                 
                  <div class="row justify-content-center">
                    <div class="col-sm-6">
                      <div class="picture-container">
                        <div class="picture">
                          <img src="{{ asset('back/assets/img/default-avatar.png') }}" class="picture-src" id="wizardPicturePreview"  />
                          <input type="file" id="wizard-picture" name="avatar"> 
                        </div>
                        <h6 class="description">Choisir Photo</h6>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="input-group form-control-lg">
                        <div class="input-group-prepend">
                          <span class="input-group-text">
                            <i class="material-icons">face</i>
                          </span>
                        </div>
                        <div class="form-group">
                          <label for="exampleInput1" class="bmd-label-floating">Prénom</label>
                          <input type="text" class="form-control" id="exampleInput1" name="prenom">
                        </div>
                      </div>
                      <div class="input-group form-control-lg">
                        <div class="input-group-prepend">
                          <span class="input-group-text">
                            <i class="material-icons">face</i>
                          </span>
                        </div>
                        <div class="form-group">
                          <label for="exampleInput2" class="bmd-label-floating">Nom</label>
                          <input type="text" class="form-control" id="exampleInput2" name="nom">
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="input-group form-control-lg">
                        <div class="input-group-prepend">
                          <span class="input-group-text">
                            <i class="material-icons">filter_9_plus</i>
                          </span>
                        </div>
                        <div class="form-group">
                          <label for="exampleInput3" class="bmd-label-floating">Numéro d'inscription</label>
                          <input type="text" class="form-control" id="exampleInput3" name="num_inscription" autocomplete="off">
                        </div>
                      </div>
                      <div class="input-group form-control-lg">
                        <div class="input-group-prepend">
                          <span class="input-group-text">
                            <i class="material-icons">phone</i>
                          </span>
                        </div>
                        <div class="form-group">
                          <label for="exampleInput4" class="bmd-label-floating">Tél</label>
                          <input type="number" class="form-control" id="exampleInput4" name="tel">
                        </div>
                      </div>
                      <div class="input-group form-control-lg">
                        <div class="input-group-prepend">
                          <span class="input-group-text">
                            <i class="material-icons">date_range</i>
                          </span>
                        </div>
                        <div class="form-group">
                           <input type="date" class="form-control datepicker" id="exampleemalil" name="ddn">
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="input-group form-control-lg">
                        <div class="input-group-prepend">
                          <span class="input-group-text">
                            <i class="material-icons">email</i>
                          </span>
                        </div>
                        <div class="form-group">
                          <label for="exampleInput5" class="bmd-label-floating">Email</label>
                          <input type="email" class="form-control" id="exampleInput5" name="email" autocomplete="off">
                        </div>
                      </div>
                      <div class="input-group form-control-lg">
                        <div class="input-group-prepend">
                          <span class="input-group-text">
                            <i class="material-icons">person</i>
                          </span>
                        </div> 
                        <div class="form-group select-wizard"> 
                          <select class="selectpicker" name="sexe" data-style="select-with-transition" title="Sexe"> 
                            <option value="Homme"> Homme </option>
                            <option value="Femme"> Femme </option> 
                          </select> 
                        </div>
                      </div>
                      <div class="input-group form-control-lg">
                        <div class="input-group-prepend">
                          <span class="input-group-text">
                            <i class="material-icons">location_city</i>
                          </span>
                        </div>
                        <div class="form-group">
                          <label for="exampleInput6" class="bmd-label-floating">Lieu naissance</label>
                          <input type="text" class="form-control" id="exampleInput6" name="lieu_naissance">
                        </div>
                      </div>                    
                    </div>

                    <div class="col-sm"> 
                        <div class="form-group">
                          <label class="bmd-label-floating"> Exemple 3 rue XXX , maarif Casablanca.</label>
                          <textarea class="form-control" rows="5" name="adresse"></textarea>
                        </div>
                    </div>
                  </div>
                </div>

                <div class="tab-pane" id="account">
                  <h5 class="info-text"> Les informations du Tutteur </h5>
                  <div class="row justify-content-center"> 
                    <div class="col-md-6">
                      <div class="input-group form-control-lg">
                        <div class="input-group-prepend">
                          <span class="input-group-text">
                            <i class="material-icons">face</i>
                          </span>
                        </div>
                        <div class="form-group">
                          <label for="exampleInput3" class="bmd-label-floating">Nom Père ( Tuteur )</label>
                          <input type="text" class="form-control" id="exampleInput3" name="nom_tuteur">
                        </div>
                      </div>
                      <div class="input-group form-control-lg">
                        <div class="input-group-prepend">
                          <span class="input-group-text">
                            <i class="material-icons">phone</i>
                          </span>
                        </div>
                        <div class="form-group">
                          <label for="exampleInput4" class="bmd-label-floating">Tél</label>
                          <input type="number" class="form-control" id="exampleInput4" name="tel_tuteur">
                        </div>
                      </div>
                      <div class="input-group form-control-lg">
                        <div class="input-group-prepend">
                          <span class="input-group-text">
                            <i class="material-icons">person</i>
                          </span>
                        </div> 
                        <div class="form-group select-wizard"> 
                          <select class="selectpicker" data-style="select-with-transition" name="sexe_tuteur" title="Sexe"> 
                            <option value="Homme"> Homme </option>
                            <option value="Femme"> Femme </option> 
                          </select> 
                        </div>
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="input-group form-control-lg">
                        <div class="input-group-prepend">
                          <span class="input-group-text">
                            <i class="material-icons">face</i>
                          </span>
                        </div>
                        <div class="form-group">
                          <label for="exampleInput5" class="bmd-label-floating">Prénom</label>
                          <input type="text" class="form-control" id="exampleInput5" name="prenom_tuteur">
                        </div>
                      </div>
                      <div class="input-group form-control-lg">
                        <div class="input-group-prepend">
                          <span class="input-group-text">
                            <i class="material-icons">email</i>
                          </span>
                        </div>
                        <div class="form-group">
                          <label for="exampleInput5" class="bmd-label-floating">Email</label>
                          <input type="email" class="form-control" id="exampleInput5" name="email_tuteur" autocomplete="off">
                        </div>
                      </div>

                      <div class="input-group form-control-lg">
                        <div class="input-group-prepend">
                          <span class="input-group-text">
                            <i class="material-icons">location_city</i>
                          </span>
                        </div>
                        <div class="form-group">
                          <label for="exampleInput6" class="bmd-label-floating">Profession</label>
                          <input type="text" class="form-control" id="exampleInput6" name="profession_tuteur">
                        </div>
                      </div>
                    </div>                          
                  </div>
                </div>

                <div class="tab-pane" id="address">
                  <div class="row justify-content-center">
                    <div class="col-sm-12">
                      <h5 class="info-text"> Scolarité</h5>
                    </div>

                    <div class="col-sm-6">
                      <div class="form-group select-wizard">
                        <label>Année Scholaire</label>
                        <select class="selectpicker" data-size="7" data-style="select-with-transition" name="année_id" title="Single Select"> 
                          @foreach($années as $année)
                          <option value="{{ $année->id }}"> {{ $année->titre}} </option> 
                          @endforeach
                        </select>
                      </div>
                    </div>

                    <div class="col-sm-6">
                      <div class="form-group select-wizard">
                        <label>Classe</label>
                        <select class="selectpicker" data-size="7" data-style="select-with-transition" name="classe_id" title="Single Select"> 
                           @foreach($classes as $classe)
                          <option value="{{ $classe->id }}"> {{ $classe->titre}} </option> 
                          @endforeach 
                        </select>
                      </div>
                    </div>
                 
                    <div class="col-sm-6">
                      <div class="form-group select-wizard">
                        <label>Catégorie</label>
                        <select class="selectpicker" data-size="7" data-style="select-with-transition" name="categorie_id" title="Single Select"> 
                          @foreach($catégories as $Catégorie)
                          <option value="{{ $Catégorie->id }}"> {{ $Catégorie->titre}} </option> 
                          @endforeach
                        </select>
                      </div>
                    </div>
 
                    <div class="col-sm-12">
                      <h5 class="info-text"> Payment </h5>
                    </div>

                    <div class="col-sm-6">
                      <div class="form-group select-wizard">
                        <label>Modalité</label>
                        <select class="selectpicker" data-style="select-with-transition" name="modalité" title="Modalité"> 
                          <option value="Mensuel"> Mensuel </option>
                          <option value="Trimestriel"> Trimestriel </option> 
                          <option value="Annuel"> Annuel </option> 
                        </select>
                      </div>
                    </div>

                    <div class="col-sm-6">
                      <div class="form-group select-wizard">
                        <label>Transport</label>
                        <select class="selectpicker" data-style="select-with-transition" name="transport" title="Single Select"> 
                          <option value="Oui"> Oui </option>
                          <option value="Non"> Non </option> 
                        </select>
                      </div>
                    </div>

                    <div class="col-sm-6">
                      <div class="input-group form-control">  
                          <label for="exampleInput22" class="bmd-label-floating">Tarif</label>
                          <input type="number" class="form-control" id="exampleInput22" name="tarif"> 
                      </div>
                    </div>

                    <div class="col-sm-6">
                      <div class="form-group select-wizard">
                        <label>Cantine</label>
                        <select class="selectpicker" data-style="select-with-transition" name="cantine" title="Select"> 
                          <option value="Oui"> Oui </option>
                          <option value="Non"> Non </option> 
                        </select>
                      </div>
                    </div>
                    
                  </div>
                </div>

              </div>

            </div>
            
            <div class="card-footer">
              <div class="mr-auto">
                <input type="button" class="btn btn-previous btn-fill btn-default btn-wd disabled" name="previous" value="Previous">
              </div>
              <div class="ml-auto">
                <input type="button" class="btn btn-next btn-fill btn-success btn-wd" name="next" value="Next">
                <button type="submit" class="btn btn-finish btn-fill btn-success btn-wd" name="finish"  style="display: none;" onclick="md.showNotification('bottom','right')">Finish</button> 
              </div>
              <div class="clearfix"></div>
            </div>

        </form>
      </div>
    </div>
    <!-- wizard container -->
</div> 
  
@endsection