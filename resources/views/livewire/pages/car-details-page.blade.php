<div class="container mx-auto py-10 px-6">
    <div class="bg-white shadow-xl rounded-lg overflow-hidden">

        <div class="relative">
            <div x-data="{
                showModal: false,
                imageUrl: '',
                currentIndex: 0,
                images: @js($car->images->pluck('path')->map(fn($path) => asset($path))->toArray() ?? []),
                nextImage() {
                    this.currentIndex = (this.currentIndex + 1) % this.images.length;
                    this.imageUrl = this.images[this.currentIndex];
                },
                prevImage() {
                    this.currentIndex = (this.currentIndex - 1 + this.images.length) % this.images.length;
                    this.imageUrl = this.images[this.currentIndex];
                }
            }" x-init="imageUrl = images.length > 0 ? images[0] : '{{ asset('images/placeholder-car.jpg') }}'"
                @keydown.window="if(showModal) {
            if ($event.key === 'ArrowRight') nextImage();
            if ($event.key === 'ArrowLeft') prevImage();
            if ($event.key === 'Escape') showModal = false;
        }"
                class="relative flex flex-col items-center w-full">

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 mt-6 w-full">
                    <template x-for="(image, index) in images" :key="index">
                        <img :src="image" alt="Car Image"
                        class="block object-cover w-full h-64 sm:h-72 md:h-80 lg:h-96 rounded-lg cursor-pointer shadow-md hover:scale-105 transition-all duration-300"
                        @click="showModal = true; currentIndex = index; imageUrl = images[currentIndex];"
                        onerror="this.onerror=null;this.src='{{ asset('storage/images/placeholder-car.jpg') }}';" />

                    </template>
                </div>

                <div x-show="showModal"
                    class="fixed inset-0 bg-black bg-opacity-75 flex justify-center items-center z-50 px-4"
                    @click.away="showModal = false">

                    <button @click="showModal = false"
                        class="absolute top-5 right-5 mt-20 bg-gray-900 text-white text-3xl font-bold rounded-full p-3 transition hover:bg-gray-700">
                        &times;
                    </button>

                    <div class="relative flex items-center justify-center w-full max-w-5xl">
                        <button @click="prevImage()"
                            class="absolute left-1 top-1/2 transform -translate-y-1/2 bg-white text-black
               px-4 py-2 text-xl md:px-3 md:py-1 md:text-base sm:px-2 sm:py-1 sm:text-sm
               rounded-full shadow-md hover:bg-gray-300">
                            ‹
                        </button>

                        <img :src="imageUrl" alt="Car Image"
                            class="w-full max-w-4xl max-h-[90vh] object-contain rounded-lg shadow-lg transition-all duration-300">

                        <button @click="nextImage()"
                            class="absolute right-1 top-1/2 transform -translate-y-1/2 bg-white text-black
               px-4 py-2 text-xl md:px-3 md:py-1 md:text-base sm:px-2 sm:py-1 sm:text-sm
               rounded-full shadow-md hover:bg-gray-300">
                            ›
                        </button>
                    </div>

                </div>
            </div>
        </div>

        <div class="p-8 space-y-6">
            <h1 class="text-4xl font-bold text-gray-900 text-center">{{ $car->brand->name }} {{ $car->model }}</h1>
            <div class="flex justify-center">
                <div
                    class="relative inline-block px-6 py-3
                text-3xl sm:text-4xl md:text-5xl font-extrabold text-white rounded-lg shadow-lg
                bg-gradient-to-r from-[#b01e45] to-[#9a1b3d] transform hover:scale-105 transition">
                    {{ number_format($car->price, 2) }} лв.
                    <span
                        class="absolute -top-2 -right-3 sm:-top-3 sm:-right-5 bg-yellow-400 text-black text-[10px] sm:text-xs font-bold px-2 py-1 rounded-lg">
                        🔥 ТОП ОФЕРТА!
                    </span>
                </div>
            </div>

            <p class="text-gray-600 text-2xl font-semibold text-center">{{ $car->category }}</p>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 text-gray-700">
                <p class="flex items-center"><strong class="text-gray-900 mr-2">📅 Година:</strong> {{ $car->year }}
                </p>
                <p class="flex items-center"><strong class="text-gray-900 mr-2">📍 Пробег:</strong>
                    {{ number_format($car->mileage, 0, '', ' ') }} км</p>
                <p class="flex items-center"><strong class="text-gray-900 mr-2">🔧 Трансмисия:</strong>
                    {{ $car->transmission }}</p>
                <p class="flex items-center"><strong class="text-gray-900 mr-2">⛽ Двигател:</strong> {{ $car->engine }}
                </p>
                <p class="flex items-center"><strong class="text-gray-900 mr-2">🎨 Цвят:</strong>
                    {{ $car->exterior_color }}</p>
                <p class="flex items-center"><strong class="text-gray-900 mr-2">🚗 Привод:</strong> {{ $car->drive }}
                </p>
                <p class="flex items-center"><strong class="text-gray-900 mr-2">🔑 Ключове:</strong>
                    {{ $car->keys }}</p>
                <p class="flex items-center"><strong class="text-gray-900 mr-2">📜 Собственост:</strong>
                    {{ $car->ownership }}</p>
            </div>

            <hr class="border-gray-300">

            <div>
                <h2 class="text-2xl font-semibold text-gray-900 mb-2">Описание</h2>
                <p class="text-gray-700 leading-relaxed whitespace-pre-line">{{ $car->description }}</p>
            </div>

            <div class="flex flex-col sm:flex-row sm:space-x-4 space-y-4 sm:space-y-0">
                <a wire:navigate href="/contacts"
                    class="flex items-center justify-center bg-[#b01e45] text-white px-6 py-3 rounded-lg text-lg font-semibold hover:bg-[#9a1b3d] transition shadow-md transform hover:scale-105">
                    📩 Запитване
                </a>
                <a wire:navigate href="/cars"
                    class="flex items-center justify-center bg-gray-200 text-gray-900 px-6 py-3 rounded-lg text-lg font-semibold hover:bg-gray-300 transition shadow-md transform hover:scale-105">
                    🔙 Обратно към каталога
                </a>
            </div>
        </div>

    </div>
</div>
