<div class="container mx-auto py-10 px-4 md:px-6">
    <div class="text-center mb-8">
        <h1 class="text-3xl font-extrabold text-gray-900">
            Намерете своя перфектен автомобил 🚗💨
        </h1>
        <p class="text-gray-600 mt-2 max-w-2xl mx-auto">
            Разгледайте нашия каталог с висококачествени автомобили на атрактивни цени. Използвайте удобните филтри, за да намерите кола, която отговаря на вашите изисквания.
        </p>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-4 gap-6">
        <livewire:components.car-filters />

        <div class="lg:col-span-3">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                @forelse($cars as $car)
                    <div class="bg-white rounded-lg shadow-md p-4">
                        <img src="{{ optional($car->images->first())->path ? asset($car->images->first()->path) : asset('images/placeholder-car.jpg') }}"
                            alt="{{ $car->brand->name }}" class="w-full h-48 object-cover rounded-lg">

                        <div class="mt-4">
                            <h3 class="text-lg font-bold text-gray-800">{{ $car->brand->name }} {{ $car->model }}</h3>
                            <p class="text-gray-600">
                                {{ $car->year }} | {{ $car->engine }}
                            </p>
                            <p class="text-gray-600">
                                Пробег: {{ number_format($car->mileage, 0, '', ' ') }} км
                            </p>
                            <p class="text-gray-600">
                                Трансмисия: {{ $car->transmission }}
                            </p>
                            <p class="text-lg font-semibold text-orange-500">
                                {{ number_format($car->price, 2) }} лв.
                            </p>

                            <a href="/cars/{{ $car->id }}"
                                class="mt-4 inline-block bg-orange-500 text-white px-6 py-2 rounded-lg text-sm hover:bg-orange-600 transition">
                                Разгледай
                            </a>
                        </div>
                    </div>
                @empty
                    <div class="col-span-full text-center text-gray-600">
                        <p>Няма намерени автомобили.</p>
                    </div>
                @endforelse
            </div>

            <div class="mt-8 flex justify-center">
                {{ $cars->links() }}
            </div>
        </div>
    </div>
</div>
