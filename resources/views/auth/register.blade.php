@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                   <h4 class="card-title">{{ __('Création du compte') }}</h4> 
                </div>
                
                <div class="card-body">

                    <ul class="nav nav-pills justify-content-center" role="tablist">
                        <li class="nav-item">
                        <a class="nav-link active show" data-toggle="tab" href="#link1" role="tablist">
                        Professeur
                        </a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#link2" role="tablist">
                        Agent / Admin
                        </a>
                        </li> 
                    </ul>
                    <br>

                    <div class="tab-content tab-space">
                        <div class="tab-pane active show" id="link1">
                            <form method="POST" action="{{ route('register') }}">
                                @csrf

                                <div class="form-group row">
                                    <label for="nom" class="col-md-4 col-form-label text-md-right">{{ __('Nom') }}</label>

                                    <div class="col-md-6">
                                        <input id="nom" type="text" class="form-control @error('nom') is-invalid @enderror" name="nom" value="{{ old('nom') }}" required autocomplete="nom" autofocus>

                                        @error('nom')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="prenom" class="col-md-4 col-form-label text-md-right">{{ __('Prenom') }}</label>

                                    <div class="col-md-6">
                                        <input id="prenom" type="text" class="form-control @error('prenom') is-invalid @enderror" name="prenom" value="{{ old('prenom') }}" required autocomplete="prenom" autofocus>

                                        @error('prenom')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label for="cin" class="col-md-4 col-form-label text-md-right">{{ __('CIN') }}</label>

                                    <div class="col-md-6">
                                        <input id="cin" type="text" class="form-control @error('cin') is-invalid @enderror" name="cin" value="{{ old('cin') }}" required autocomplete="cin" autofocus>

                                        @error('cin')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="diplome" class="col-md-4 col-form-label text-md-right">{{ __('Diplome') }}</label>

                                    <div class="col-md-6">
                                        <input id="diplome" type="text" class="form-control @error('diplome') is-invalid @enderror" name="diplome" value="{{ old('diplome') }}" required autocomplete="diplome" autofocus>

                                        @error('diplome')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="promo" class="col-md-4 col-form-label text-md-right">{{ __('Promo') }}</label>

                                    <div class="col-md-6">
                                        <input id="promo" type="text" class="form-control @error('promo') is-invalid @enderror" name="promo" value="{{ old('promo') }}" required autocomplete="promo" autofocus>

                                        @error('promo')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div> 

                                <div class="form-group row">
                                    <label for="role" class="col-md-4 col-form-label text-md-right">{{ __('Role') }}</label>

                                    <div class="col-md-6"> 

                                        <select id="role" class="form-control" data-style="select-with-transition" name="role" title="role" required>  
                                            <option value="professeur"> professeur </option> 
                                          </select> 

                                        @error('role')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                    <div class="col-md-6">
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('S\'inscrire') }}
                                        </button>
                                    </div>
                                </div>
                            </form>

                        </div>
                        <div class="tab-pane" id="link2">
                            <form method="POST" action="{{ route('register') }}">
                                @csrf

                                <div class="form-group row">
                                    <label for="nom" class="col-md-4 col-form-label text-md-right">{{ __('Nom') }}</label>

                                    <div class="col-md-6">
                                        <input id="nom" type="text" class="form-control @error('nom') is-invalid @enderror" name="nom" value="{{ old('nom') }}" required autocomplete="nom" autofocus>

                                        @error('nom')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="prenom" class="col-md-4 col-form-label text-md-right">{{ __('Prenom') }}</label>

                                    <div class="col-md-6">
                                        <input id="prenom" type="text" class="form-control @error('prenom') is-invalid @enderror" name="prenom" value="{{ old('prenom') }}" required autocomplete="prenom" autofocus>

                                        @error('prenom')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                 
                                <div class="form-group row">
                                    <label for="role" class="col-md-4 col-form-label text-md-right">{{ __('Role') }}</label>

                                    <div class="col-md-6"> 

                                        <select id="role" class="form-control" data-style="select-with-transition" name="role" title="role" required>  
                                            <option value="admin"> Admin </option> 
                                            <option value="agent"> Agent </option> 
                                          </select> 

                                        @error('role')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="cin" class="col-md-4 col-form-label text-md-right">{{ __('CIN') }}</label>

                                    <div class="col-md-6">
                                        <input id="cin" type="text" class="form-control @error('cin') is-invalid @enderror" name="cin" value="{{ old('cin') }}" required autocomplete="cin" autofocus>

                                        @error('cin')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                    <div class="col-md-6">
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('S\'inscrire') }}
                                        </button>
                                    </div>
                                </div>
                            </form>                            
                        </div> 
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
