<div class="container mx-auto py-10 px-4 md:px-6">

    <div class="text-center mb-8">
        <h1 class="text-3xl font-extrabold text-gray-900">
            Намерете своя перфектен автомобил 🚗💨
        </h1>
        <p class="text-gray-600 mt-2 max-w-2xl mx-auto">
            Разгледайте нашия каталог с висококачествени автомобили на атрактивни цени. Използвайте удобните филтри, за
            да намерите кола, която отговаря на вашите изисквания.
        </p>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-4 gap-6">
        <livewire:components.car-filters />

        <div class="lg:col-span-3">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                @forelse($cars as $car)
                <div class="bg-white rounded-lg shadow-md p-4 flex flex-col h-full">
                    <img src="{{ optional($car->images->first())->path ? asset('storage/' . $car->images->first()->path) : asset('images/placeholder-car.jpg') }}"
                        alt="{{ $car->brand->name }}" class="w-full h-48 object-cover rounded-lg">

                    <div class="mt-4 flex flex-col flex-grow">
                        <div class="space-y-2 flex-grow">
                            <h3 class="text-lg font-bold text-gray-800 break-words">
                                {{ $car->brand->name }} {{ $car->model }}
                            </h3>
                            <p class="text-gray-600">
                                {{ $car->year }} | {{ $car->engine }}
                            </p>
                            <p class="text-gray-600">
                                Пробег: {{ number_format($car->mileage, 0, '', ' ') }} км.
                            </p>
                            <p class="text-gray-600">
                                Трансмисия: {{ $car->transmission }}
                            </p>
                            <p class="text-lg font-semibold text-[#b01e45]">
                                {{ number_format($car->price, 2) }} лв.
                            </p>
                        </div>

                        <div class="flex justify-end mt-auto">
                            <a wire:navigate href="{{ route('car.details', ['slug' => $car->slug]) }}"
                                class="bg-[#b01e45] text-white px-6 py-2 rounded-lg text-sm hover:bg-[#9a1b3d] transition">
                                Разгледай
                            </a>
                        </div>
                    </div>
                </div>

                @empty
                    <div class="col-span-full text-center text-gray-600">
                        <p>Няма намерени автомобили.</p>
                    </div>
                @endforelse
            </div>


            <div class="mt-10">
                @if ($cars->hasPages())
                    <nav role="navigation" aria-label="Pagination Navigation"
                        class="flex items-center justify-between space-x-2 md:space-x-4">

                        @if ($cars->onFirstPage())
                            <button
                                class="w-10 h-10 flex items-center justify-center rounded-full bg-gray-200 text-gray-500"
                                disabled>
                                <i class="fas fa-chevron-left"></i>
                            </button>
                        @else
                            <button wire:click="previousPage"
                                class="w-10 h-10 flex items-center justify-center rounded-full bg-[#b01e45] text-white hover:bg-[#9a1b3d] transition">
                                <i class="fas fa-chevron-left"></i>
                            </button>
                        @endif


                        <div class="flex space-x-2 overflow-x-auto">
                            @foreach ($cars->links()->elements as $element)
                                @if (is_string($element))
                                    <span
                                        class="w-10 h-10 flex items-center justify-center rounded-full bg-gray-200 text-gray-500">{{ $element }}</span>
                                @endif

                                @if (is_array($element))
                                    @foreach ($element as $page => $url)
                                        @if ($page == $cars->currentPage())
                                            <span
                                                class="w-10 h-10 flex items-center justify-center rounded-full bg-[#b01e45] text-white">
                                                {{ $page }}
                                            </span>
                                        @else
                                            <button wire:click="gotoPage({{ $page }})"
                                                class="w-10 h-10 flex items-center justify-center rounded-full bg-gray-200 text-gray-700 hover:bg-gray-300 transition">
                                                {{ $page }}
                                            </button>
                                        @endif
                                    @endforeach
                                @endif
                            @endforeach
                        </div>


                        @if ($cars->hasMorePages())
                            <button wire:click="nextPage"
                                class="w-10 h-10 flex items-center justify-center rounded-full bg-[#b01e45] text-white hover:bg-[#9a1b3d] transition">
                                <i class="fas fa-chevron-right"></i>
                            </button>
                        @else
                            <button
                                class="w-10 h-10 flex items-center justify-center rounded-full bg-gray-200 text-gray-500"
                                disabled>
                                <i class="fas fa-chevron-right"></i>
                            </button>
                        @endif
                    </nav>
                @endif
            </div>



        </div>
    </div>
</div>
