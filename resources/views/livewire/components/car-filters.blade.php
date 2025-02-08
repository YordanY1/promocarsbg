<div class="bg-white rounded-lg shadow-md p-6 space-y-6">
    <h2 class="text-lg font-bold text-gray-800">Филтрирай</h2>

    <div x-data="{ openPrice: false }">
        <button @click="openPrice = !openPrice"
            class="w-full px-4 py-2 flex justify-between items-center bg-gray-200 rounded-lg font-semibold transition-all duration-300 hover:bg-gray-300">
            <span>Ценови Диапазон</span>
            <svg x-show="!openPrice" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
            </svg>
            <svg x-show="openPrice" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7"></path>
            </svg>
        </button>

        <div x-show="openPrice" class="mt-2 space-y-2 bg-gray-100 p-4 rounded-lg">
            @php
                $priceRanges = [
                    [0, 10000, '0 - 10,000 лв.'],
                    [10000, 30000, '10,000 - 30,000 лв.'],
                    [30000, 60000, '30,000 - 60,000 лв.'],
                    [60000, 100000, '60,000 - 100,000 лв.'],
                    [100000, 300000, '100,000 - 300,000 лв.'],
                ];
            @endphp

            @foreach ($priceRanges as [$min, $max, $label])
                <button type="button"
                    class="w-full px-4 py-2 rounded-lg font-semibold transition-all duration-300 
                        {{ $minPrice == $min && $maxPrice == $max ? 'bg-gradient-to-r from-orange-500 to-orange-700 text-white' : 'bg-gray-200 text-gray-800 hover:bg-gray-300' }}"
                    wire:click="setPriceRange({{ $min }}, {{ $max }})">
                    {{ $label }}
                </button>
            @endforeach
        </div>
    </div>

    <div x-data="{ openBrands: false }">
        <button @click="openBrands = !openBrands"
            class="w-full px-4 py-2 flex justify-between items-center bg-gray-200 rounded-lg font-semibold transition-all duration-300 hover:bg-gray-300">
            <span>Марка</span>
            <svg x-show="!openBrands" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
            </svg>
            <svg x-show="openBrands" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7"></path>
            </svg>
        </button>

        <div x-show="openBrands" class="mt-2 space-y-2 bg-gray-100 p-4 rounded-lg">
            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-4">
                @foreach ($brands as $brand)
                    <button type="button"
                        class="flex flex-col items-center justify-center p-2 rounded-lg transition
                        {{ $selectedMake == $brand->id ? 'bg-orange-500 text-white' : 'bg-gray-200 hover:bg-gray-300' }}"
                        wire:click="setMakeFilter({{ $brand->id }})">

                        <img src="{{ asset($brand->logo) }}" alt="{{ $brand->name }}" class="w-12 h-12 object-cover">

                        <span class="text-sm font-semibold mt-2">{{ $brand->name }}</span>
                    </button>
                @endforeach
            </div>

        </div>
    </div>

    <button type="button"
        class="w-full px-4 py-2 rounded-lg font-semibold text-white bg-black hover:bg-gray-800 transition-all duration-300"
        wire:click="resetFilters">
        Нулирай филтрите
    </button>
</div>
