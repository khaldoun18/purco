<div class="w-[856px]">
    <h1 class="sm:text-[32px] text-2xl font-bold text-center mb-[48px]">Offerte aanvragen</h1>

    <form wire:submit.prevent="submit">
        <h1 class=" text-[20px] text-[#313131] font-bold">Overzicht offerteaanvraag</h1>
        <div class="my-[20px]">
            <x-input-label  :value="__('Gewenste levertermijn*')" />
            <input wire:model="desired_date" id="desired_date" type="date"
                class="block w-40 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-red-500 focus:border-red-500"
                required>
            <x-input-error :messages="$errors->get('desired_date')" class="mt-2" />
        </div>

        <p class="mt-6 text-[14px] leading-5 font-bold text-[#313131]">*Onze levertermijn is 48h werkdagen na bestelling voor 16h in België;
            onder vbh van stock en zonder engagement.</p>
<div class="bg-[#F2F2F2]  p-[12px]">
    @foreach ($quotes as $index => $quote)
    <div class="flex items-center space-x-4 my-[24px] whitespace-nowrap ">
        <div class="flex-1">
            <x-input-label  :value="__('Artikel')" />
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
            <x-input-label  :value="__('Volume (kg)')" />
            <input wire:model="quotes.{{ $index }}.volume" type="text"
                class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-red-500 focus:border-red-500"
                min="0" required>
        </div>
        <div class="flex-1">
            <x-input-label  :value="__('Verpakking')" />
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
    <div class="flex justify-center">
        <x-input-error :messages="$errors->get('quotes.' . $index . '.volume')" class="mt-2" />
    </div>
@endforeach
</div>
       

        <div class="flex justify-start my-[24px] font-bold">
            <button wire:click.prevent="addQuote" type="button"
                class="text-[#338734] hover:text-green-700 underline underline-offset-8">
                + Artikel toevoegen
            </button>
        </div>

        <div class="mb-[20px]">
            <x-input-label for="password" :value="__('Opmerkingen')" />
            <textarea wire:model="remarks" id="remarks" rows="4"
                class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-red-500 focus:border-red-500"></textarea>
        </div>
        <x-input-error :messages="$errors->get('remarks')" class="" />

        <div class="flex items-center mb-[16px]">
            <input wire:model="return_package" id="return_package" type="checkbox"
                class="h-4 w-4 text-[#338734] border-[#338734] rounded focus:ring-green-500">
            <label for="return_package" class="block ml-2 text-sm text-gray-900">Ik ga akkoord met de algemene
                voorwaarden</label>
        </div>



        <div class="flex items-center ">
            <input wire:model="acceptTerms" id="acceptTerms" type="checkbox"
                class="h-4 w-4 text-[#338734] border-[#338734] rounded focus:ring-green-500">
            <label for="acceptTerms" class="block w-full ml-2 text-sm text-gray-900">Verpakking (lege IBC) mee retour
                nemen</label>

        </div>
        <x-input-error :messages="$errors->get('acceptTerms')" class="" />


        <div class="mt-[32px] mb-[30px]">
           
            <button type="submit"
                class="inline-flex items-center px-6 py-2 border border-transparent text-base font-medium  shadow-sm text-white bg-[#CC181B] hover:bg-red-600 focus:outline-none ">
                Offerte aanvragen
            </button>
        </div>
    </form>


</div>
