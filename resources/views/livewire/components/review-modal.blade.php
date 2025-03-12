<div>
    @if ($isOpen)
        <div class="fixed inset-0 flex items-center justify-center z-50">
            <div class="w-full max-w-3xl p-6 relative bg-transparent">

                <button wire:click="closeModal"
                    class="absolute top-2 right-2 md:top-4 md:right-4 w-10 h-10 flex items-center justify-center
                bg-gray-800 bg-opacity-50 text-white text-2xl rounded-full hover:bg-gray-900 transition z-50">
                    ✕
                </button>



                <div class="bg-white bg-opacity-90 backdrop-blur-lg rounded-lg shadow-lg p-8 text-center">


                    <h3 class="text-2xl font-bold text-[#b01e45] mb-4">
                        {{ $review->name ?? 'Клиент' }} - Доволен клиент
                    </h3>


                    <p class="text-gray-700 text-lg italic">
                        "{{ $review->content ?? 'Няма наличен отзив.' }}"
                    </p>


                    <div class="mt-4 text-yellow-500 text-xl">
                        @for ($i = 0; $i < 5; $i++)
                            ⭐
                        @endfor
                    </div>

                    <div class="mt-6">
                        <button type="button" wire:click="closeModal"
                            class="bg-[#b01e45] text-white px-6 py-3 rounded-lg text-lg w-full md:w-auto
                            hover:bg-[#9a1b3d] transition focus:outline-none">
                            Затвори
                        </button>
                    </div>


                </div>
            </div>
        </div>
    @endif
</div>
