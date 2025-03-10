<div>

    @livewire('components.cookie-consent')

    <div class="relative w-full h-auto">
        <img src="{{ asset('images/backgrounds/background.jpg') }}" class="absolute inset-0 w-full h-full object-cover">

        <div class="relative flex flex-col items-center justify-start pt-20 md:justify-center text-white bg-black/50 px-6 space-y-8 md:space-y-12">
            <h1 class="text-3xl md:text-5xl font-bold text-[#b01e45] text-center animate-fade-in-up">
                Добре дошли в PromoCars BG
            </h1>
            <p class="text-base md:text-xl text-gray-200 text-center animate-fade-in">
                Най-добрите оферти за автомобили на едно място!
            </p>

            <div class="w-full max-w-sm sm:max-w-md md:max-w-2xl lg:max-w-3xl mx-auto">
                @livewire('components.free-consultation')
            </div>

            <div class="w-full max-w-sm sm:max-w-md md:max-w-3xl lg:max-w-4xl mx-auto">
                @livewire('components.promotions')
            </div>

        </div>
    </div>

    <div class="bg-gray-100 py-12 px-4 md:px-6">
        @livewire('components.how-we-work')
    </div>

    <div class="bg-gray-100 py-12 px-4 md:px-6">
        @livewire('components.reviews', ['limit' => 4])
    </div>

    <div class="bg-gray-100 py-12 px-4 md:px-6">
        <h2 class="text-3xl font-bold text-center text-gray-800 mb-8">
            Част от наличните ни автомобили
        </h2>
        @livewire('components.carousel')
    </div>

</div>
