@extends('layouts.main')
@section('page-title', 'Forgot Password - Rhea Realty')


@section('content')
  <div class="auth-page auth-page--forgot-password">
    <form method="POST" action="{{ route('password.email') }}" class="auth-page__form">
        @csrf
      <h3 class="auth-page__title">Forgot Password</h3>
        <p class="auth-page__desc"> Forgot your password? No problem.</p>
      <div class="auth-page__form-group">
        <label for="email" :value="__('Email')" class="auth-page__form-label">Email:</label>
        <input type="email" name="email" :value="old('email')" required  class="auth-page__form-input">
        @error('email')
         <div class="error-sub-text">
             {{$message}}
         </div>
        @enderror
      </div>
      <div class="auth-page__form-group">
        <button type="submit" class="auth-page__form-button">{{ __('Password Reset') }}</button>
      </div>
    </form>
  </div>
@endsection















{{-- Original Code --}}
{{-- <x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button>
                    {{ __('Email Password Reset Link') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout> --}}
