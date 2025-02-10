<div x-data="{
    currentIndex: 0,
    startX: 0,
    endX: 0,
    touchMove(event) {
        this.endX = event.touches[0].clientX;
    },
    touchEnd() {
        let diff = this.startX - this.endX;
        if (diff > 50) {
            this.currentIndex = (this.currentIndex < {{ ceil($cars->count() / 3) - 1 }}) ? this.currentIndex + 1 : 0;
        } else if (diff < -50) {
            this.currentIndex = (this.currentIndex > 0) ? this.currentIndex - 1 : {{ ceil($cars->count() / 3) - 1 }};
        }
    }
}" class="relative w-full max-w-6xl mx-auto overflow-hidden"
    @touchstart="startX = $event.touches[0].clientX" @touchmove="touchMove($event)" @touchend="touchEnd()">


    <div class="hidden md:flex transition-transform duration-500 ease-out"
        :style="{ transform: `translateX(-${currentIndex * 100}%)` }">
        @foreach ($cars->chunk(3) as $chunk)
            <div class="flex w-full flex-shrink-0 space-x-4">
                @foreach ($chunk as $car)
                    <div class="w-full md:w-1/3 bg-white rounded-lg shadow-md flex flex-col items-center">


                        <img src="{{ asset($car->images->first()->path) }}" alt="{{ $car->make }}"
                            class="w-full h-72 md:h-48 object-cover rounded-t-lg">


                        <div class="p-4 text-center">
                            <h3 class="text-lg font-bold text-gray-800">{{ $car->brand->name }} {{ $car->model }}</h3>
                            <p class="text-lg text-[#b01e45] font-semibold mb-4">{{ number_format($car->price, 2) }} лв.
                            </p>
                            <a wire:navigate href="{{ route('car.details', ['slug' => $car->slug]) }}"
                                class="bg-[#b01e45] text-white px-6 py-2 rounded-lg text-sm hover:bg-[#9a1b3d] transition">
                                Разгледай
                            </a>
                        </div>

                    </div>
                @endforeach
            </div>
        @endforeach
    </div>

    <div class="md:hidden flex transition-transform duration-500 ease-out"
        :style="{ transform: `translateX(-${currentIndex * 100}%)` }">
        @foreach ($cars->chunk(1) as $chunk)
            <div class="w-full flex-shrink-0">
                @foreach ($chunk as $car)
                    <div class="w-full bg-white rounded-lg shadow-md flex flex-col items-center mb-6">

                        <img src="{{ asset($car->images->first()->path) }}" alt="{{ $car->make }}"
                            class="w-full h-72 object-cover rounded-t-lg">


                        <div class="p-4 text-center">
                            <h3 class="text-lg font-bold text-gray-800">{{ $car->brand->name }} {{ $car->model }}
                            </h3>
                            <p class="text-lg text-[#b01e45] font-semibold mb-4">{{ number_format($car->price, 2) }}
                                лв.</p>
                            <a wire:navigate href="{{ route('car.details', ['slug' => $car->slug]) }}"
                                class="bg-[#b01e45] text-white px-6 py-2 rounded-lg text-sm hover:bg-[#9a1b3d] transition">
                                Разгледай
                            </a>

                        </div>

                    </div>
                @endforeach
            </div>
        @endforeach
    </div>

    <button @click="currentIndex = (currentIndex > 0) ? currentIndex - 1 : {{ ceil($cars->count() / 3) - 1 }}"
        class="hidden md:block absolute left-2 top-1/2 transform -translate-y-1/2 bg-[#b01e45] text-white px-4 py-2 rounded-full shadow-md hover:bg-[#9a1b3d]">
        ‹
    </button>
    <button @click="currentIndex = (currentIndex < {{ ceil($cars->count() / 3) - 1 }}) ? currentIndex + 1 : 0"
        class="hidden md:block absolute right-2 top-1/2 transform -translate-y-1/2 bg-[#b01e45] text-white px-4 py-2 rounded-full shadow-md hover:bg-[#9a1b3d]">
        ›
    </button>

    <div class="relative mt-10 flex justify-center space-x-3">
        @foreach (range(0, ceil($cars->count() / 3) - 1) as $index)
            <button @click="currentIndex = {{ $index }}"
                class="w-3 h-3 rounded-full transition focus:outline-none"
                :class="{
                    'bg-[#b01e45]': currentIndex === {{ $index }},
                    'bg-gray-400': currentIndex !== {{ $index }}
                }">
            </button>
        @endforeach
    </div>

    <div class="mt-12 flex justify-center">
        <a wire:navigate href="/cars"
            class="bg-[#b01e45] text-white px-8 py-3 rounded-lg text-lg font-semibold shadow-md hover:bg-[#9a1b3d] transition transform hover:scale-105">
            Виж всички автомобили
        </a>
    </div>
</div>
