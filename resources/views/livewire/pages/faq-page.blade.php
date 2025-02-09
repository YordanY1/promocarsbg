<div class="container mx-auto py-16 px-6">
    <h1 class="text-4xl font-bold text-orange-500 text-center mb-10">Често задавани въпроси (FAQ)</h1>

    <div class="space-y-6 max-w-3xl mx-auto">
        @foreach ($faqs as $faq)
            <div x-data="{ open: false }" class="border-b border-gray-300 pb-4">
                <button @click="open = !open"
                    class="w-full text-left text-lg font-semibold text-gray-900 flex justify-between items-center py-3">
                    {{ $faq->question }}
                    <span x-show="!open" class="text-orange-500">+</span>
                    <span x-show="open" class="text-orange-500">−</span>
                </button>
                <div x-show="open" x-transition class="text-gray-700 px-4 mt-2">{{ $faq->answer }}</div>
            </div>
        @endforeach
    </div>
</div>
