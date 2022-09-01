@extends('layouts.login')

@section('form')
<div class="background d-flex align-items-center">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card login-card align-items-center">  
                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            {{-- campi input per il login --}}
                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>
    
                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
    
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
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
    
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="form-group row">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
    
                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>
    
                            {{-- link per recupero password e tasto login --}}
                            <div class="form-group row mb-0 ">
                                <div class="col-12 d-flex justify-content-end my-3">  
                                    @if (Route::has('password.request'))
                                        <a href="{{ route('password.request') }}">
                                            {{ __('Hai dimenticato la password?') }}
                                        </a>
                                    @endif
                                </div>
                                <div class="col ">
                                    <div class="row d-flex justify-content-end">
                                        <div class="mb-2 col-12 "> 
                                            Hai già un'account?
                                        </div> 
                                        <button type="submit" class="btn-main">
                                            {{ __('Login') }}
                                        </button>
                                    </div>   
                                </div>               
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
