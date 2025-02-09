<div class="container mx-auto py-16 px-6">
    <div class="flex flex-col lg:flex-row bg-white shadow-lg rounded-lg overflow-hidden">
        <!-- Контактна форма -->
        <div class="lg:w-1/2 p-12 flex flex-col justify-center">
            <h2 class="text-4xl font-bold text-orange-500 mb-6">Свържете се с нас</h2>
            <p class="text-gray-600 mb-6 text-lg">Изпратете ни съобщение и нашите експерти ще се свържат с вас възможно най-скоро.</p>

            <form class="space-y-6">
                <div>
                    <label class="block text-gray-700 font-semibold text-lg">Име</label>
                    <input type="text" placeholder="Вашето име" class="w-full mt-2 px-4 py-3 border border-gray-300 rounded-lg focus:ring focus:ring-orange-500 text-lg">
                </div>
                
                <div>
                    <label class="block text-gray-700 font-semibold text-lg">Имейл</label>
                    <input type="email" placeholder="example@email.com" class="w-full mt-2 px-4 py-3 border border-gray-300 rounded-lg focus:ring focus:ring-orange-500 text-lg">
                </div>

                <div>
                    <label class="block text-gray-700 font-semibold text-lg">Телефон</label>
                    <input type="text" placeholder="+359 888 123 456" class="w-full mt-2 px-4 py-3 border border-gray-300 rounded-lg focus:ring focus:ring-orange-500 text-lg">
                </div>

                <div>
                    <label class="block text-gray-700 font-semibold text-lg">Съобщение</label>
                    <textarea rows="5" placeholder="Вашето съобщение" class="w-full mt-2 px-4 py-3 border border-gray-300 rounded-lg focus:ring focus:ring-orange-500 text-lg"></textarea>
                </div>

                <button type="submit" class="w-full bg-orange-500 text-white py-3 rounded-lg font-semibold text-lg hover:bg-orange-600 transition-all duration-300">
                    Изпрати съобщение
                </button>
            </form>
        </div>

        {{-- <div class="hidden lg:block lg:w-1/2 min-h-[600px] bg-cover bg-center rounded-r-lg" 
            style="background-image: url('{{ asset('images/brand/background.png') }}');"></div> --}}
    </div>
</div>
