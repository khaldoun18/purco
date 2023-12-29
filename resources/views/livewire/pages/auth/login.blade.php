<?php

use App\Livewire\Forms\LoginForm;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Session;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('layouts.app')] class extends Component {
    public LoginForm $form;

    /**
     * Handle an incoming authentication request.
     */
    public function login(): void
    {
        $this->validate();

        $this->form->authenticate();

        Session::regenerate();

        $this->redirect(session('url.intended', RouteServiceProvider::HOME), navigate: true);
    }
}; ?>

<div>
    <div class="container mx-auto my-[72px] sm:w-[412px] w-[250px]">
        <h1 class="mb-6 text-[32px] font-bold text-center">Inloggen</h1>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form wire:submit="login">
            <!-- Email Address -->
            <div class="mt-4">
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input wire:model="form.email" id="email" class="block w-full mt-1" type="email" name="email"
                    required autofocus />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4" x-data="{ showPassword: false }">
                <x-input-label for="password" :value="__('Wachtwoord')" />

                <div class="relative">
                    <x-text-input wire:model="form.password" id="password" class="block w-full mt-1"
                        x-bind:type="showPassword ? 'text' : 'password'" name="password" required />
                    <div class="absolute inset-y-0 right-0 flex items-center px-3 text-gray-500">
                        <button type="button" x-on:click="showPassword = !showPassword">
                            <i class="fas"
                                x-bind:class="{ 'fa-eye': !showPassword, 'fa-eye-slash': showPassword }"></i>
                        </button>
                    </div>
                </div>

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <input id="remember_me" type="checkbox"
                        class="text-[#338734] border-gray-300 rounded form-checkbox focus:ring-[#338734]"
                        wire:model="form.remember">
                    <span class="ml-2 text-sm ">{{ __('Remember me') }}</span>
                </label>
            </div>

            {{-- <div class="flex items-center justify-between mt-4"> --}}

            {{-- if needed --}}
            {{-- @if (Route::has('password.request'))
                    <a class="text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}" wire:navigate>
                        {{ __('Forgot your password?') }}
                    </a>
                @endif --}}
            <div class="">
                <x-primary-button class="flex items-center justify-center w-full my-[32px]">
                    Inloggen
                </x-primary-button>

            </div>
            <div class="mt-3 font-bold text-center">Heb je nog geen account? <span class="text-sm text-[#338734]"><a
                        class="underline" href="{{ route('register') }}" wire:navigate>Registreer nu</a></span></div>
        </form>
    </div>
    <div class="mt-[200px]">
        <livewire:layout.footer>
    </div>
    
</div>
