<div class="px-[150px] max-small:px-5">
    <h1 class="mb-12 text-3xl font-bold text-center">Offerte aanvragen</h1>

    <form wire:submit.prevent="submit">
        <h1 class="my-4 text-xl font-black">Overzicht offerteaanvraag</h1>
        <div class="mb-4">
            <label for="desired_date" class="block text-sm font-medium text-gray-700">Gewenste levertermijn*</label>
            <input wire:model="desired_date" id="desired_date" type="date"
                class="block w-40 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-red-500 focus:border-red-500"
                required>
            <x-input-error :messages="$errors->get('desired_date')" class="mt-2" />
        </div>

        <p class="my-6 text-xs font-bold text-gray-600">*Onze levertermijn is 48h werkdagen na bestelling voor 16h in België;
            onder vbh van stock en zonder engagement.</p>

        @foreach ($quotes as $index => $quote)
            <div class="flex items-center mb-4 space-x-4">
                <div class="flex-1">
                    <label class="block text-sm font-medium text-gray-700">Artikel</label>
                    <select wire:model="quotes.{{ $index }}.product"
                        class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-red-500 focus:border-red-500"
                        required>
                        <option value="">Kies een product</option>
                        @foreach ($products as $product)
                            <option value="{{ $product['id'] }}">{{ $product['name'] }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="flex-1">
                    <label class="block text-sm font-medium text-gray-700">Volume (KG)</label>
                    <input wire:model="quotes.{{ $index }}.volume" type="text"
                        class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-red-500 focus:border-red-500"
                        min="0" required>
                </div>
                <div class="flex-1">
                    <label class="block text-sm font-medium text-gray-700">Verpakking</label>
                    <select wire:model="quotes.{{ $index }}.packaging"
                        class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-red-500 focus:border-red-500"
                        required>
                        <option value="">Kies een verpakking</option>
                        @foreach ($packagingOptions as $option)
                            <option>{{ $option }}</option>
                        @endforeach
                    </select>
                </div>
                @if (count($quotes) > 1)
                    <button wire:click.prevent="removeQuote({{ $index }})" type="button"
                        class="text-red-500 hover:text-red-700">
                        Verwijder
                    </button>
                @endif
            </div>
        @endforeach

        <div class="flex justify-start">
            <button wire:click.prevent="addQuote" type="button"
                class="text-[#338734] hover:text-green-700 underline underline-offset-2">
                + Artikel toevoegen
            </button>
        </div>

        <div class="my-4">
            <label for="remarks" class="block text-sm font-medium text-gray-700">Opmerkingen</label>
            <textarea wire:model="remarks" id="remarks" rows="4"
                class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-red-500 focus:border-red-500"></textarea>
        </div>
        <x-input-error :messages="$errors->get('remarks')" class="" />

        <div class="flex items-center mb-4">
            <input wire:model="return_package" id="return_package" type="checkbox"
                class="h-4 w-4 text-[#338734] border-[#338734] rounded focus:ring-green-500">
            <label for="return_package" class="block ml-2 text-sm text-gray-900">Ik ga akkoord met de algemene
                voorwaarden</label>
        </div>



        <div class="flex items-center mb-4">
            <input wire:model="acceptTerms" id="acceptTerms" type="checkbox"
                class="h-4 w-4 text-[#338734] border-[#338734] rounded focus:ring-green-500">
            <label for="acceptTerms" class="block w-full ml-2 text-sm text-gray-900">Verpakking (lege IBC) mee retour
                nemen</label>

        </div>
        <x-input-error :messages="$errors->get('acceptTerms')" class="" />


        <div class="flex justify-center">
            <button type="submit"
                class="inline-flex items-center px-4 py-2 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-[#CC181B] hover:bg-red-600 focus:outline-none disabled:bg-red-300"
                :disabled="!acceptTerms">
                Offerte aanvragen
            </button>
        </div>
    </form>


</div>