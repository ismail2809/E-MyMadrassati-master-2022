@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
        <img src="{{ asset('backend/img/photos/login.png') }}" class="img-fluid" alt="Image de connexion">   
        </div> 
        <div class="col-md-6">
            <div class="card">
                <div class="text-center mt-4">
                    <h1 class="h2">Bienvenue 👋</h1>
                    <p class="lead">
                        {{ __('Connectez-vous à votre compte ') }}
                    </p>
                </div> 
                <hr>
                <div class="m-sm-4"> 
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input id="email" type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Entrer votre email">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror 
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Password</label>
                             <input id="password" type="password" class="form-control form-control-lg  @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Entrer votre mot de passe">
                            <small>
                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}"> 
                                    {{ __('mot de passe oublié? ') }}
                                </a>
                            @endif
                            </small>  
                        </div>
                        <div>
                            <label class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                 <span class="form-check-label">
                                 {{ __('Souviens-moi') }}
                                </span>
                            </label>
                        </div>
                        <hr>
                        <div class="text-center mt-3">
                            <button type="submit" class="btn btn-lg btn-primary" style="background-color: #696cff"> {{ __('S\'identifier') }}</button> 
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 