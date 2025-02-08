<div class="bg-gray-100 p-4 md:p-6 rounded-lg shadow-lg mx-4 md:mx-0">
    <h2 class="text-2xl md:text-3xl font-bold text-center text-orange-500 animate-fade-in-up">Текущи промоции</h2>

    @if($promotions->isEmpty())
        <p class="text-center text-gray-700 mt-4 animate-fade-in">Няма активни промоции в момента.</p>
    @else
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 md:gap-6 mt-6">
            @foreach($promotions as $promotion)
                <div class="bg-white p-4 rounded-lg shadow-md text-center flex flex-col 
                            transform transition duration-500 ease-in-out hover:scale-105 hover:shadow-xl 
                            animate-fade-in-up">

                    <h3 class="text-lg md:text-xl font-semibold text-gray-900">{{ $promotion->title }}</h3>

                    <p class="text-gray-700 mt-2 text-sm md:text-base flex-grow">
                        {{ $promotion->description }}
                    </p>

                    <div class="mt-auto">
                        <span class="block bg-orange-500 text-white px-4 py-2 rounded-lg">
                            {{ $promotion->discount }}% отстъпка!
                        </span>
                    </div>

                </div>
            @endforeach
        </div>
    @endif
</div>
