<div class="max-w-[856px]">
    <h1 class="sm:text-[32px] text-2xl font-bold text-center mb-[48px]">Bestel nu</h1>

    <form wire:submit.prevent="submit">
        <h1 class="text-[20px] text-[#313131] font-bold">Mijn bestelling</h1>
        <div class="my-[20px]">
            <x-input-label  :value="__('Gewenste levertermijn*')" />
            <input wire:model="desired_date" id="desired_date" type="date"
                class="block w-40 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-red-500 focus:border-red-500"
                required>
            <x-input-error :messages="$errors->get('desired_date')" class="mt-2" />
        </div>

        <p class="my-6 text-[14px] leading-5 font-bold text-[#313131]">*Onze levertermijn is 48h werkdagen na bestelling voor 16h in
            België;
            onder vbh van stock en zonder engagement.</p>

        @if ($hasPreviousOrder)
            <div class="flex items-center mb-4">
                <input wire:click='$refresh' wire:model="previous_order" id="previous_order" type="checkbox"
                    class="h-4 w-4 text-[#338734] border-[#338734] rounded focus:ring-green-500">
                    <x-input-label class="px-4"  :value="__('Herhaal vorige bestelling')" />
            </div>
        @endif

<div class="bg-[#F2F2F2]">
    @if (!$previous_order)
    @foreach ($quotes as $index => $quote)
        <div class="flex items-center space-x-4 my-[24px] whitespace-nowrap">
            <div class="flex-1">
                <x-input-label  :value="__('Artikel')" />
                <select wire:model="quotes.{{ $index }}.product"
                    class="block w-full mt-1 border-gray-300 shadow-sm focus:ring-red-500 focus:border-red-500"
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
                    class="block w-full mt-1 border-gray-300 shadow-sm focus:ring-red-500 focus:border-red-500"
                    min="0" required>


            </div>

            <div class="flex-1">
                <x-input-label  :value="__('Verpakking')" />
                <select wire:model="quotes.{{ $index }}.packaging"
                    class="block w-full mt-1 border-gray-300 shadow-sm focus:ring-red-500 focus:border-red-500"
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

    <div class="flex justify-start mb-[24px]">
        <button wire:click.prevent="addQuote" type="button"
                class="text-[#338734] hover:text-green-700 underline underline-offset-8">
                + Artikel toevoegen
            </button>
    </div>
@else
    @foreach ($this->getProcessedQuotes() as $processedQuote)
        <div class="flex items-center space-x-4 my-[24px]">
            <div class="flex-1">
                <x-input-label  :value="__('Artikel')" />
                <h1 class="mt-1 text-gray-600">{{ $processedQuote['product_name'] }}</h1>
            </div>
            <div class="flex-1">
                <x-input-label  :value="__('Volume (kg)')" />
                <h1 class="mt-1 text-gray-600">{{ $processedQuote['volume'] }}</h1>
            </div>
            <div class="flex-1">
                <x-input-label  :value="__('Verpakking')" />
                <h1 class="mt-1 text-gray-600">{{ $processedQuote['packaging'] }}</h1>
            </div>
        </div>
    @endforeach


@endif
</div>
       
        <div class="flex flex-wrap">
            <div class="w-full px-2 mb-4 md:w-3/4">
                <x-input-label  :value="__('Leveradres')" />
                <input wire:model='delivery_address' type="text" id="address" name="address"
                    class="w-full px-3 py-2 leading-tight text-gray-700 border-gray-300 shadow-sm appearance-none focus:outline-none focus:shadow-outline focus:ring-red-500 focus:border-red-500">
                <x-input-error :messages="$errors->get('delivery_address')" class="mt-2" />
            </div>
            <div class="w-full px-2 mb-4 md:w-1/4">
                <x-input-label  :value="__('Nummer')" />
                <input wire:model='address_number' type="text" id="number" name="number"
                    class="w-full px-3 py-2 leading-tight text-gray-700 border-gray-300 shadow-sm appearance-none focus:outline-none focus:shadow-outline focus:ring-red-500 focus:border-red-500">
                <x-input-error :messages="$errors->get('address_number')" class="mt-2" />
            </div>
            <div class="w-full px-2 mb-4 md:w-1/2">
                <x-input-label  :value="__('Postcode')" />
                <input wire:model='postcode' type="text" id="postcode" name="postcode"
                    class="w-full px-3 py-2 leading-tight text-gray-700 border-gray-300 shadow-sm appearance-none focus:outline-none focus:shadow-outline focus:ring-red-500 focus:border-red-500">
                <x-input-error :messages="$errors->get('postcode')" class="mt-2" />
            </div>
            <div class="w-full px-2 mb-4 md:w-1/2">
                <x-input-label  :value="__('Stad/Gemeente')" />
                <input wire:model='city' type="text" id="city" name="city"
                    class="w-full px-3 py-2 leading-tight text-gray-700 border-gray-300 shadow-sm appearance-none focus:outline-none focus:shadow-outline focus:ring-red-500 focus:border-red-500">
                <x-input-error :messages="$errors->get('city')" class="mt-2" />
            </div>
        </div>

        <div class="mb-4">
            <x-input-label  :value="__('Opmerkingen')" />
            <textarea wire:model="remarks" id="remarks" rows="4"
                class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-red-500 focus:border-red-500"></textarea>
        </div>
        <x-input-error :messages="$errors->get('remarks')" class="" />

        <div class="flex items-center mt-8 mb-4">
            <input wire:model="return_package" id="return_package" type="checkbox"
                class="h-4 w-4 text-[#338734] border-[#338734] rounded focus:ring-green-500">
               <label class="text-[#898989] text-[14px] font-normal ml-2" for="">Verpakking (lege IBC) mee retour nemen</label>
        </div>



        <div class="flex items-center mt-4">
            <input wire:model="acceptTerms" id="acceptTerms" type="checkbox"
                class="h-4 w-4 text-[#338734] border-[#338734] rounded focus:ring-green-500">
                <label class="text-[#898989] text-[14px] font-normal ml-2" for="">Ik ga akkoord met de algemene voorwaarden</label>

        </div>
        <x-input-error :messages="$errors->get('acceptTerms')" class="" />


        <div class="my-8">
            <button type="submit"
                class="inline-flex items-center px-6 py-2 border border-transparent text-base font-medium  shadow-sm text-white bg-[#CC181B] hover:bg-red-600 focus:outline-none ">
                Offerte aanvragen
            </button>
        </div>
    </form>


</div>
