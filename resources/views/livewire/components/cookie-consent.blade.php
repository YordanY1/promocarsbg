<div>
    @if ($show)
        <div class="fixed inset-0 z-50 flex items-center justify-center bg-black/50 backdrop-blur-md">
            <div class="bg-white p-6 rounded-lg shadow-lg max-w-lg w-full text-center">
                <h2 class="text-xl font-bold text-gray-800">Ценим твоята поверителност</h2>
                <p class="text-gray-600 mt-2">
                    Използваме бисквитки, за да сме сигурни, че ти предоставяме най-доброто изживяване на нашия уебсайт.
                </p>
                <div class="mt-4 flex justify-center space-x-4">
                    <button wire:click="decline" class="px-4 py-2 bg-gray-300 text-gray-700 rounded-md">
                        Отказвам
                    </button>
                    <button wire:click="accept" class="px-4 py-2 bg-[#b01e45] text-white rounded-md hover:bg-[#9a1b3d] transition">
                        Приемам
                    </button>
                </div>
                <div class="mt-2 text-sm text-gray-500">
                    <a href="{{ url('/cookie-policy') }}" class="underline">Научи повече</a>
                </div>
            </div>
        </div>
    @endif
</div>
