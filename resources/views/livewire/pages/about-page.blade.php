<div class="container mx-auto px-6 py-12">

    <div class="text-center">
        <h1 class="text-5xl font-extrabold text-[#b01e45]">За нас</h1>
        <p class="mt-4 text-xl text-gray-700 max-w-2xl mx-auto">
            Страст към автомобилите. Доверие, качество и най-добрите оферти на пазара. 🚗✨
        </p>
    </div>

    <div class="mt-12 grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
        <div>
            <h2 class="text-3xl font-bold text-gray-900">Нашата мисия</h2>
            <p class="mt-4 text-lg text-gray-600">
                Ние вярваме, че покупката на автомобил трябва да бъде приятно и лесно изживяване.
                Нашата цел е да предоставим **качествени автомобили** на най-добрите цени, с прозрачност и
                професионализъм.
            </p>
            <p class="mt-2 text-lg text-gray-600">
                Работим усилено, за да ви предложим най-добрите условия, без компромис в качеството и обслужването.
            </p>
        </div>
        <div>
            <img src="{{ asset('images/about-us-mission.jpg') }}" alt="Нашата мисия" class="rounded-lg shadow-lg">
        </div>
    </div>

    <div class="mt-16">
        <h2 class="text-3xl font-bold text-gray-900 text-center">Защо да изберете нас?</h2>
        <div class="mt-8 grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="flex flex-col items-center text-center bg-white p-6 rounded-lg shadow-md">
                <div
                    class="w-16 h-16 bg-[#b01e45] text-white flex items-center justify-center rounded-full text-2xl font-bold">
                    🚗</div>
                <h3 class="mt-4 text-xl font-semibold text-gray-900">Голям избор</h3>
                <p class="text-gray-600 mt-2">Разполагаме с разнообразни автомобили - от **икономични модели** до
                    **луксозни коли**.</p>
            </div>

            <div class="flex flex-col items-center text-center bg-white p-6 rounded-lg shadow-md">
                <div
                    class="w-16 h-16 bg-[#b01e45] text-white flex items-center justify-center rounded-full text-2xl font-bold">
                    ✅</div>
                <h3 class="mt-4 text-xl font-semibold text-gray-900">Гарантирано качество</h3>
                <p class="text-gray-600 mt-2">Всички автомобили са **прегледани и тествани**, за да гарантираме тяхната
                    надеждност.</p>
            </div>

            <div class="flex flex-col items-center text-center bg-white p-6 rounded-lg shadow-md">
                <div
                    class="w-16 h-16 bg-[#b01e45] text-white flex items-center justify-center rounded-full text-2xl font-bold">
                    💰</div>
                <h3 class="mt-4 text-xl font-semibold text-gray-900">Конкурентни цени</h3>
                <p class="text-gray-600 mt-2">Предлагаме едни от **най-добрите оферти** на пазара, без скрити такси.</p>
            </div>
        </div>
    </div>

    <div class="mt-16 text-center">
        <h2 class="text-3xl font-bold text-gray-900">Свържете се с нас</h2>
        <p class="text-lg text-gray-600 mt-4">Ако имате въпроси, не се колебайте да ни пишете или посетите нашия офис.
        </p>
        <div class="mt-6">
            <a wire:navigate href="/contacts"
                class="inline-block bg-[#b01e45] text-white px-8 py-3 rounded-lg text-lg font-semibold shadow-md hover:bg-[#9a1b3d] transition transform hover:scale-105">
                Вижте контактите ни
            </a>
        </div>
    </div>
</div>
