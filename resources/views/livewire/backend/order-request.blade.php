<div class="max-w-[856px]">
    <h1 class="sm:text-[32px] text-2xl font-bold text-center mb-[48px]">Bestel nu</h1>

    <form wire:submit.prevent="submit">
        <h1 class="text-[20px] font-bold">Mijn bestelling</h1>
        <div class="my-[20px]">
            <label for="desired_date" class="block text-sm font-medium text-gray-700">Gewenste levertermijn*</label>
            <input wire:model="desired_date" id="desired_date" type="date"
                class="block w-40 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-red-500 focus:border-red-500"
                required>
            <x-input-error :messages="$errors->get('desired_date')" class="mt-2" />
        </div>

        <p class="my-6 text-xs font-bold text-gray-600">*Onze levertermijn is 48h werkdagen na bestelling voor 16h in
            België;
            onder vbh van stock en zonder engagement.</p>

        @if ($hasPreviousOrder)
            <div class="flex items-center mb-4">
                <input wire:click='$refresh' wire:model="previous_order" id="previous_order" type="checkbox"
                    class="h-4 w-4 text-[#338734] border-[#338734] rounded focus:ring-green-500">
                <label for="return_package" class="block ml-2 text-sm text-gray-900">Herhaal vorige bestelling</label>
            </div>
        @endif


        @if (!$previous_order)
            @foreach ($quotes as $index => $quote)
                <div class="flex items-center space-x-4 my-[24px] whitespace-nowrap">
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
                <div class="flex justify-center">
                    <x-input-error :messages="$errors->get('quotes.' . $index . '.volume')" class="mt-2" />
                </div>
            @endforeach

            <div class="flex justify-start mb-[24px]">
                <button wire:click.prevent="addQuote" type="button"
                    class="text-[#338734] hover:text-green-700 underline underline-offset-2">
                    + Artikel toevoegen
                </button>
            </div>
        @else
            @foreach ($this->getProcessedQuotes() as $processedQuote)
                <div class="flex items-center space-x-4 my-[24px]">
                    <div class="flex-1">
                        <label class="block text-sm font-medium text-gray-700">Artikel</label>
                        <h1 class="mt-1 text-gray-600">{{ $processedQuote['product_name'] }}</h1>
                    </div>
                    <div class="flex-1">
                        <label class="block text-sm font-medium text-gray-700">Volume (KG)</label>
                        <h1 class="mt-1 text-gray-600">{{ $processedQuote['volume'] }}</h1>
                    </div>
                    <div class="flex-1">
                        <label class="block text-sm font-medium text-gray-700">Verpakking</label>
                        <h1 class="mt-1 text-gray-600">{{ $processedQuote['packaging'] }}</h1>
                    </div>
                </div>
            @endforeach


        @endif
        <div class="flex flex-wrap">
            <div class="w-full px-2 mb-4 md:w-3/4">
                <label for="address" class="block mb-2 text-sm font-bold text-gray-700">LEVERADRES</label>
                <input wire:model='delivery_address' type="text" id="address" name="address"
                    class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline focus:ring-red-500 focus:border-red-500">
                <x-input-error :messages="$errors->get('delivery_address')" class="mt-2" />
            </div>
            <div class="w-full px-2 mb-4 md:w-1/4">
                <label for="number" class="block mb-2 text-sm font-bold text-gray-700">NUMMER</label>
                <input wire:model='address_number' type="text" id="number" name="number"
                    class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline focus:ring-red-500 focus:border-red-500">
                <x-input-error :messages="$errors->get('address_number')" class="mt-2" />
            </div>
            <div class="w-full px-2 mb-4 md:w-1/2">
                <label for="postcode" class="block mb-2 text-sm font-bold text-gray-700">POSTCODE</label>
                <input wire:model='postcode' type="text" id="postcode" name="postcode"
                    class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline focus:ring-red-500 focus:border-red-500">
                <x-input-error :messages="$errors->get('postcode')" class="mt-2" />
            </div>
            <div class="w-full px-2 mb-4 md:w-1/2">
                <label for="city" class="block mb-2 text-sm font-bold text-gray-700">STAD/GEMEENTE</label>
                <input wire:model='city' type="text" id="city" name="city"
                    class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline focus:ring-red-500 focus:border-red-500">
                <x-input-error :messages="$errors->get('city')" class="mt-2" />
            </div>
        </div>

        <div class="mb-4">
            <label for="remarks" class="block text-sm font-medium text-gray-700">Opmerkingen</label>
            <textarea wire:model="remarks" id="remarks" rows="4"
                class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-red-500 focus:border-red-500"></textarea>
        </div>
        <x-input-error :messages="$errors->get('remarks')" class="" />

        <div class="flex items-center mt-8 mb-4">
            <input wire:model="return_package" id="return_package" type="checkbox"
                class="h-4 w-4 text-[#338734] border-[#338734] rounded focus:ring-green-500">
            <label for="return_package" class="block ml-2 text-sm text-gray-900">Ik ga akkoord met de algemene
                voorwaarden</label>
        </div>



        <div class="flex items-center mt-4">
            <input wire:model="acceptTerms" id="acceptTerms" type="checkbox"
                class="h-4 w-4 text-[#338734] border-[#338734] rounded focus:ring-green-500">
            <label for="acceptTerms" class="block w-full ml-2 text-sm text-gray-900">Verpakking (lege IBC) mee retour
                nemen</label>

        </div>
        <x-input-error :messages="$errors->get('acceptTerms')" class="" />


        <div class="my-8">
            <button type="submit"
                class="inline-flex items-center px-6 py-2 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-[#CC181B] hover:bg-red-600 focus:outline-none ">
                Offerte aanvragen
            </button>
        </div>
    </form>


</div>
