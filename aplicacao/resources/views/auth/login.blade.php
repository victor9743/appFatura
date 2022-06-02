@extends('layout.layout')


@section('content') 
<x-guest-layout>
    
    <x-jet-authentication-card>

        <x-jet-validation-errors />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf
            <h2 class="fw-bold mt-4 mb-5 text-uppercase" style="font-size: 20pt">Login</h2>
            <div  class="mb-4  text-left">
                <x-jet-label for="email" class="text-light" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 form-control " type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4 text-left">
                <x-jet-label for="password" class="text-light" value="Senha" />
                <x-jet-input id="password" class="block mt-1 w-full text-dark" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4 mb-4">
                <div class="row">
                    <div class="d-flex col-sm-6">
                        <label for="remember_me" >
                            <x-jet-checkbox id="remember_me" name="remember" />
                            <span class="ml-2 text-sm text-light-600">{{ __('Remember me') }}</span>
                        </label>
                    </div>
                    <div class=" col-sm-6 d-flex justify-content-end align-items-center">
                        @if (Route::has('password.request'))
                            <a class="underline text-sm text-light-600 hover:text-white-50 flex items-end" href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif
                    </div>
                </div>
            </div>

      
            <x-jet-button>
                {{ __('Log in') }}
            </x-jet-button>
            <div class="mt-5">
                <p class="mb-0">Nao possui uma conta? <a href="/register" class="text-white-50 fw-bold">Clique aqui</a>
                </p>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
<script src="{{ asset('js/app.js') }}"></script>
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/gh/AmagiTech/JSLoader/amagiloader.js"></script>
  <script>/*
    AmagiLoader.show();
    setTimeout(() => {
       AmagiLoader.hide();
    }, 1000);*/
   </script>
   
  
@endsection