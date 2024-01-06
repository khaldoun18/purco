<?php

use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;
use Ibericode\Vat\Validator as VatValidator;
use Axlon\PostalCodeValidation\Rules\PostalCode;

new #[Layout('layouts.app')] class extends Component {
    public string $first_name = '';
    public string $last_name = '';
    public string $phone_number = '';
    public string $company = '';
    public string $vat_number = '';
    public string $address = '';
    public string $address_number = '';
    public string $postcode = '';
    public string $city = '';
    public string $email = '';
    public string $password = '';
    public string $password_confirmation = '';
    public $accept = false;
    /**
     * Handle an incoming registration request.
     */
    public function register(): void
    {
        $validated = $this->validate(
            [
                'first_name' => ['required', 'string', 'max:255'],
                'last_name' => ['required', 'string', 'max:255'],
                'phone_number' => ['required', 'numeric', 'unique:users,phone_number'],
                'company' => ['required', 'string', 'max:255'],
                'vat_number' => [
                    'required',
                    'string',
                    'max:255',
                    'unique:users,vat_number',
                    function ($attribute, $value, $fail) {
                        $vatValidator = new VatValidator();
                        if (!$vatValidator->validateVatNumberFormat($value)) {
                            $fail('The Vat number must have a valid VAT number format.');
                        }
                    },
                ],
                'address' => ['required', 'string', 'max:255'],
                'address_number' => ['required', 'string', 'max:255'],
                'postcode' => ['required', 'string', 'max:255', PostalCode::for('LB')->or('BE')],
                'city' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email'],
                'password' => ['required', 'string', 'confirmed', 'min:8'],
                'password_confirmation' => ['required_with:password', 'same:password'],
            ],
            [
                'postal_code' => 'The provided postal code is not valid',
            ],
        );

        $validated['password'] = Hash::make($validated['password']);

        event(new Registered(($user = User::create($validated))));

        Auth::login($user);

        $this->redirect(RouteServiceProvider::HOME, navigate: true);
    }
}; ?>

<div>
    <div class="container mx-auto  md:w-[856px] max-small:px-4  py-4 my-[72px]">
        <div class="flex text-red-600 ">
            <a class="flex items-center ml-2 font-bold" href="{{ route('welcome') }}" wire:navigate>
                <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg"
                    class="mr-2">
                    <path
                        d="M12.4995 17.1004L7.06621 11.6671C6.42454 11.0254 6.42454 9.97539 7.06621 9.33372L12.4995 3.90039"
                        stroke="#D11616" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>
                Terug naar de website
            </a>
        </div>

        <h1 class="my-[32px] text-3xl font-black text-center">Registreer</h1>
        <div>
            <form wire:submit="register">
                <h1 class="text-[16px] font-bold">Uw persoonsgegevens</h1>
                <div class="grid grid-cols-1 gap-x-8 medium:grid-cols-2 mb-[32px]">
                    <!-- First Name -->
                    <div class="mt-4">
                        <x-input-label  for="first_name" :value="__('Voornaam')" />
                        <x-text-input wire:model="first_name" id="first_name" class="block w-full mt-1" type="text"
                            name="first_name" required />
                        <x-input-error :messages="$errors->get('first_name')" class="mt-2" />
                    </div>

                    <!-- Last Name -->
                    <div class="mt-4">
                        <x-input-label for="last_name" :value="__('Achternaam')" />
                        <x-text-input wire:model="last_name" id="last_name" class="block w-full mt-1" type="text"
                            name="last_name" required />
                        <x-input-error :messages="$errors->get('last_name')" class="mt-2" />
                    </div>

                    <!-- Email Address -->
                    <div class="mt-4">
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input wire:model="email" id="email" class="block w-full mt-1" type="email"
                            name="email" required autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <!-- Phone Number -->
                    <div class="mt-4">
                        <x-input-label for="phone_number" :value="__('Telefoonnummer')" />
                        <x-text-input wire:model="phone_number" id="phone_number" class="block w-full mt-1"
                            type="text" name="phone_number" required autocomplete="phone_number" />
                        <x-input-error :messages="$errors->get('phone_number')" class="mt-2" />
                    </div>

                </div>

                <h1 class="text-[16px] font-bold">Uw bedrijfsgegevens</h1>
                <div class="grid grid-cols-1 gap-x-8 medium:grid-cols-2 mb-[32px]">
                    <!-- Company -->
                    <div class="mt-4">
                        <x-input-label for="company" :value="__('Bedrijf')" />
                        <x-text-input wire:model="company" id="company" class="block w-full mt-1" type="text"
                            name="company" required />
                        <x-input-error :messages="$errors->get('company')" class="mt-2" />
                    </div>

                    <!-- Vat Number -->
                    <div class="mt-4">
                        <x-input-label for="vat_number" :value="__('BTW Nummer')" />
                        <x-text-input wire:model="vat_number" id="vat_number" class="block w-full mt-1" type="text"
                            name="vat_number" required />
                        <x-input-error :messages="$errors->get('vat_number')" class="mt-2" />
                    </div>

                    <!-- Address -->
                    <div class="mt-4">
                        <x-input-label for="address" :value="__('Adres')" />
                        <x-text-input wire:model="address" id="address" class="block w-full mt-1" type="text"
                            name="address" required />
                        <x-input-error :messages="$errors->get('address')" class="mt-2" />
                    </div>

                    <!-- Address Number -->
                    <div class="mt-4">
                        <x-input-label for="address_number" :value="__('Nummer')" />
                        <x-text-input wire:model="address_number" id="address_number" class="block w-full mt-1"
                            type="text" name="address_number" required />
                        <x-input-error :messages="$errors->get('address_number')" class="mt-2" />
                    </div>

                    <!-- Postcode -->
                    <div class="mt-4">
                        <x-input-label for="postcode" :value="__('Postcode')" />
                        <x-text-input wire:model="postcode" id="postcode" class="block w-full mt-1" type="text"
                            name="postcode" required />
                        <x-input-error :messages="$errors->get('postcode')" class="mt-2" />
                    </div>

                    <!-- City -->
                    <div class="mt-4">
                        <x-input-label for="city" :value="__('Stad/Gemeente')" />
                        <x-text-input wire:model="city" id="city" class="block w-full mt-1" type="text"
                            name="city" required />
                        <x-input-error :messages="$errors->get('city')" class="mt-2" />
                    </div>


                </div>
                <h1 class="text-[16px] font-bold">Uw account</h1>
                <div class="grid grid-cols-1 gap-x-8 medium:grid-cols-2">
                    <div class="mt-4" x-data="{ showPassword: false }">
                        <x-input-label for="password" :value="__('Wachtwoord')" />

                        <div class="relative">
                            <x-text-input wire:model="password" id="password" class="block w-full pr-10 mt-1"
                                x-bind:type="showPassword ? 'text' : 'password'" name="password" required
                                autocomplete="new-password" />
                            <div class="absolute inset-y-0 right-0 flex items-center px-2">
                                <button type="button" x-on:click="showPassword = !showPassword"
                                    class=" focus:outline-none">
                                    <i class="fas"
                                        x-bind:class="{ 'fa-eye': !showPassword, 'fa-eye-slash': showPassword }"></i>
                                </button>
                            </div>
                        </div>

                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <!-- Confirm Password -->
                    <div class="mt-4" x-data="{ showConfirmPassword: false }">
                        <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                        <div class="relative">
                            <x-text-input wire:model="password_confirmation" id="password_confirmation"
                                class="block w-full pr-10 mt-1" x-bind:type="showConfirmPassword ? 'text' : 'password'"
                                name="password_confirmation" required />
                            <div class="absolute inset-y-0 right-0 flex items-center px-2">
                                <button type="button" x-on:click="showConfirmPassword = !showConfirmPassword"
                                    class="text-gray-700 focus:outline-none">
                                    <i class="fas"
                                        x-bind:class="{ 'fa-eye': !showConfirmPassword, 'fa-eye-slash': showConfirmPassword }"></i>
                                </button>
                            </div>
                        </div>



                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                    </div>
                </div>

                <!-- Checkbox for Acceptance -->
                <div class="my-[32px]">
                    <label for="accept" class="flex items-center gap-x-2">
                        <input id="accept" type="checkbox" wire:click="$refresh" wire:model="accept"
                            class="text-[#338734] border-gray-300 rounded form-checkbox focus:ring-[#338734]">
                        <span
                            class="ml-2 text-sm text-gray-600">{{ __('Ik ga akkoord met de algemene voorwaarden') }}</span>
                    </label>
                </div>


                <div class="">
                    <x-primary-button :disabled="!$accept"
                        class="{{ $accept ? 'bg-[#338734] hover:bg-green-500' : ' cursor-not-allowed' }}">
                        {{ __('Registreer') }}
                    </x-primary-button>


                    <div class="my-[32px] font-black text-medium">Heb je al een account?
                        <a class="text-[16px] underline rounded-md text-[#338734] hover:text-green-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                            href="{{ route('login') }}" wire:navigate>
                            {{ __('Log In') }}
                        </a>
                    </div>



                </div>
            </form>
        </div>
    </div>

    <livewire:layout.footer>
</div>
