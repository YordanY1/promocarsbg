<div class="container mx-auto py-10 px-4 md:px-6">
    <h1 class="text-4xl font-bold text-orange-500 text-center mb-6">Каталог с автомобили</h1>

    <!-- Филтри -->
    <div class="bg-white p-6 rounded-lg shadow-md mb-8 flex flex-col md:flex-row md:items-center md:justify-between space-y-4 md:space-y-0">
        <input wire:model.debounce.300ms="search" type="text" placeholder="Търси по марка или модел..."
            class="w-full md:w-1/3 px-4 py-2 border rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-orange-500">

        <select wire:model="brand" class="w-full md:w-1/4 px-4 py-2 border rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-orange-500">
            <option value="">Всички марки</option>
            <option value="Audi">Audi</option>
            <option value="BMW">BMW</option>
            <option value="Mercedes">Mercedes</option>
        </select>

        <select wire:model="fuelType" class="w-full md:w-1/4 px-4 py-2 border rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-orange-500">
            <option value="">Всички горива</option>
            <option value="Бензин">Бензин</option>
            <option value="Дизел">Дизел</option>
            <option value="Хибрид">Хибрид</option>
        </select>

        <select wire:model="sortBy" class="w-full md:w-1/4 px-4 py-2 border rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-orange-500">
            <option value="latest">Най-нови</option>
            <option value="price_asc">Цена: ниска към висока</option>
            <option value="price_desc">Цена: висока към ниска</option>
        </select>
    </div>

    <!-- Грид с автомобили -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach($cars as $car)
            <div class="bg-white rounded-lg shadow-md p-4">
                <img src="{{ asset($car->images->where('path', 'like', '%front%')->first()->path ?? 'images/placeholder-car.jpg') }}" 
                    alt="{{ $car->make }} {{ $car->model }}" class="w-full h-48 object-cover rounded-lg">
                
                <div class="mt-4">
                    <h3 class="text-lg font-bold text-gray-800">{{ $car->make }} {{ $car->model }}</h3>
                    <p class="text-gray-600">{{ $car->year }} | {{ $car->engine }}</p>
                    <p class="text-lg font-semibold text-orange-500">{{ number_format($car->price, 2) }} лв.</p>

                    <a wire:navigate href="/cars/{{ $car->id }}" 
                        class="mt-4 inline-block bg-orange-500 text-white px-6 py-2 rounded-lg text-sm hover:bg-orange-600 transition">
                        Разгледай
                    </a>
                </div>
            </div>
        @endforeach
    </div>

    <!-- Пагинация -->
    <div class="mt-8">
        {{ $cars->links() }}
    </div>
</div>
