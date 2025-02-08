<div class="bg-gray-50 py-12">
    <h2 class="text-3xl font-bold text-center text-gray-800 mb-8">Градим доверие</h2>
    <p class="text-center text-gray-600 mb-12">Стани част от нашите 5 звездни клиенти</p>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
        @foreach ($reviews as $review)
            <div class="bg-white p-6 rounded-lg shadow-lg text-center transition transform hover:-translate-y-2 hover:shadow-xl cursor-pointer"
                wire:click="openModal({{ $review->id }})">
                <img src="{{ asset('images/user/user-avatar.jpg') }}" alt="{{ $review->name }}"
                    class="w-24 h-24 rounded-full mx-auto border-4 border-orange-500">
                <h3 class="text-xl font-semibold mt-4 text-orange-600">{{ $review->name }}</h3>
                <p class="text-sm text-gray-500">Доволен клиент</p>
                <p class="mt-3 text-gray-600">{{ \Illuminate\Support\Str::limit($review->content, 100) }}</p>
                <div class="mt-4 text-yellow-500">
                    @for ($i = 0; $i < 5; $i++) ⭐ @endfor
                </div>
            </div>
        @endforeach
    </div>

    @livewire('components.review-modal')
</div>
