<div>
    @if ($isOpen)
        <div class="fixed inset-0 flex items-center justify-center z-50">
            <div class="w-full max-w-4xl p-6 relative bg-transparent">


                <button wire:click="closeModal" class="absolute top-3 right-3 text-gray-300 hover:text-white text-3xl">
                    ✕
                </button>

                <div class="bg-white bg-opacity-80 backdrop-blur-lg rounded-lg shadow-lg p-8">


                    <h3 class="text-3xl font-bold text-orange-500 mb-6 text-center">
                        {{ $review->name ?? 'Клиент' }} - Доволен клиент
                    </h3>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 items-center">

                        @if ($review && $review->car)
                            <img src="{{ asset($review->car->image) }}" alt="{{ $review->car->make }}"
                                class="w-full h-auto rounded-lg shadow-lg">
                        @endif

                        <div>
                            <p class="text-gray-600 text-lg text-center md:text-left">
                                {{ $review->content ?? '' }}
                            </p>

                            <div class="mt-6 text-center">
                                <button wire:click="closeModal"
                                    class="bg-orange-500 text-white px-6 py-3 rounded-lg text-lg w-full md:w-auto hover:bg-orange-600 transition">
                                    Затвори
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    @endif
</div>
