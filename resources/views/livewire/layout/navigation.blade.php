<?php

use App\Livewire\Actions\Logout;
use Livewire\Volt\Component;

new class extends Component {
    /**
     * Log the current user out of the application.
     */
    public function logout(Logout $logout): void
    {
        $logout();

        $this->redirect('/', navigate: true);
    }
}; ?>

<nav x-data="{ open: false }" class="">
    <!-- Primary Navigation Menu -->
    <div class="px-4 lg:px-16">
        <div class="flex items-center justify-between h-[80px]">
            <a href="{{ route('dashboard') }}" wire:navigate>
                <x-application-logo class="block w-auto text-gray-800 fill-current h-9" />
            </a>
            <div class="flex ">

            </div>


            <div class="flex ">



                <!-- Navigation Links -->
                <div class="items-center hidden space-x-8 lg:-my-px lg:ms-10 lg:flex whitespace-nowrap lg:justify-end">
                    <x-nav-link class="h-10" :href="route('dashboard')" :active="request()->routeIs('dashboard')" wire:navigate>
                        {{ __('Dashboard') }}
                    </x-nav-link>

                    <x-nav-link class="h-10" :href="route('quote')" :active="request()->routeIs(['quote', 'quote-success'])" wire:navigate>
                        {{ __('Offerte aanvragen') }}
                    </x-nav-link>

                    <x-nav-link class="h-10" :href="route('order')" :active="request()->routeIs([
                        'order',
                        'order-success',
                        'order-hold-insufficient-credit',
                        'order-hold-overdue-invoice',
                    ])" wire:navigate>
                        {{ __('Bestel nu') }}
                    </x-nav-link>

                    <x-nav-link class="h-10" :href="route('my-orders')" :active="request()->routeIs('my-orders')" wire:navigate>
                        {{ __('Mijn bestellingen') }}
                    </x-nav-link>

                    <x-nav-link class="h-10" :href="route('info-center')" :active="request()->routeIs('info-center')" wire:navigate>
                        {{ __('Info Center') }}
                    </x-nav-link>


                </div>

            </div>

            <!-- Settings Dropdown -->
            <div class="hidden lg:flex lg:items-center lg:ms-6 whitespace-nowrap">
                @auth
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <button
                                class="inline-flex items-center px-3 py-2 text-sm font-medium leading-4 text-gray-500 transition duration-150 ease-in-out bg-white border border-transparent rounded-md hover:text-gray-700 focus:outline-none">
                                <div class="flex items-center">
                                    <!-- Initials circle -->
                                    <div
                                        class="flex items-center justify-center w-8 h-8 text-white bg-green-600 rounded-full">
                                        <div x-data="{
                                            first_name: '{{ auth()->user()->first_name }}',
                                            last_name: '{{ auth()->user()->last_name }}'
                                        }"
                                            x-text="`${first_name.substring(0,1)}${last_name.substring(0,1)}`.toUpperCase()"
                                            x-on:profile-updated.window="first_name = $event.detail.first_name; last_name = $event.detail.last_name">
                                        </div>
                                    </div>
                                    <!-- User's full name -->
                                    <div x-data="{
                                        first_name: '{{ auth()->user()->first_name }}',
                                        last_name: '{{ auth()->user()->last_name }}'
                                    }" x-text="`${first_name} ${last_name}`"
                                        x-on:profile-updated.window="first_name = $event.detail.first_name; last_name = $event.detail.last_name"
                                        class="ml-2 font-semibold">
                                    </div>
                                    <!-- Dropdown icon -->
                                    <svg class="w-4 h-4 ml-1 fill-current" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>

                            </button>
                        </x-slot>

                        <x-slot name="content">
                            <x-dropdown-link :href="route('profile')" wire:navigate>
                                {{ __('Profile') }}
                            </x-dropdown-link>

                            <!-- Authentication -->
                            <button wire:click="logout" class="w-full text-start">
                                <x-dropdown-link>
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </button>
                        </x-slot>
                    </x-dropdown>
                @else
                    <x-nav-link class="h-10 " :href="route('login')" wire:navigate>
                        {{ __('Login') }}
                    </x-nav-link>
                @endauth

            </div>

            <!-- Hamburger -->
            <div class="flex items-center -me-2 lg:hidden">
                <button @click="open = ! open"
                    class="inline-flex items-center justify-center p-2 text-gray-400 transition duration-150 ease-in-out rounded-md hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500">
                    <svg class="w-6 h-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{ 'block': open, 'hidden': !open }" class="hidden lg:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" wire:navigate>
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('quote')" :active="request()->routeIs('quote')" wire:navigate>
                {{ __('Offerte aanvragen') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('order')" :active="request()->routeIs('order')" wire:navigate>
                {{ __('Bestel nu') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('my-orders')" :active="request()->routeIs('my-orders')" wire:navigate>
                {{ __('Mijn bestellingen') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('info-center')" :active="request()->routeIs('info-center')" wire:navigate>
                {{ __('Info Center') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            @auth
                <div class="px-4">
                    <div class="text-base font-medium text-gray-800" x-data="{{ json_encode(['first_name' => auth()->user()->first_name]) }}" x-text="first_name"
                        x-on:profile-updated.window="first_name = $event.detail.first_name"></div>
                    <div class="text-sm font-medium text-gray-500" x-data="{{ json_encode(['email' => auth()->user()->email]) }}" x-text="email"
                        x-on:profile-updated.window="email = $event.detail.email"></div>
                </div>

                <div class="mt-3 space-y-1">
                    <x-responsive-nav-link :href="route('profile')" wire:navigate>
                        {{ __('Profile') }}
                    </x-responsive-nav-link>

                    <!-- Authentication -->
                    <button wire:click="logout" class="w-full text-start">
                        <x-responsive-nav-link>
                            {{ __('Log Out') }}
                        </x-responsive-nav-link>
                    </button>
                </div>
            @else
            <x-responsive-nav-link :href="route('login')"  wire:navigate>
                {{ __('Login') }}
            </x-responsive-nav-link>
            @endauth

        </div>
    </div>
</nav>
