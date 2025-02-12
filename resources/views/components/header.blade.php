<header x-data="{ open: false }" class="bg-black text-white shadow-md z-4000">
    <div class="container mx-auto flex justify-between items-center py-4 px-6">

        <a wire:navigate href="/" class="cursor-pointer">
            <img src="{{ asset('images/brand/logo.png') }}" alt="PromoCars BG" class="h-12 md:h-16">
        </a>


        <nav class="hidden md:flex space-x-8 text-lg">
            <a wire:navigate href="/" class="relative cursor-pointer hover:text-[#b01e45] transition group">
                Начало
                <span
                    class="absolute left-0 bottom-0 w-0 h-0.5 bg-[#b01e45] transition-all duration-300 group-hover:w-full"></span>
            </a>
            <a wire:navigate href="/cars" class="relative cursor-pointer hover:text-[#b01e45] transition group">
                Автомобили
                <span
                    class="absolute left-0 bottom-0 w-0 h-0.5 bg-[#b01e45] transition-all duration-300 group-hover:w-full"></span>
            </a>
            <a wire:navigate href="/about" class="relative cursor-pointer hover:text-[#b01e45] transition group">
                За нас
                <span
                    class="absolute left-0 bottom-0 w-0 h-0.5 bg-[#b01e45] transition-all duration-300 group-hover:w-full"></span>
            </a>
            <a wire:navigate href="/contacts" class="relative cursor-pointer hover:text-[#b01e45] transition group">
                Контакти
                <span
                    class="absolute left-0 bottom-0 w-0 h-0.5 bg-[#b01e45] transition-all duration-300 group-hover:w-full"></span>
            </a>
        </nav>
        <a wire:navigate href="/contacts"
            class="hidden md:block bg-[#b01e45] text-white px-6 py-2 rounded-lg text-lg 
           hover:bg-[#9a1b3d] transition-all duration-500 ease-in-out 
           hover:scale-105 shadow-lg animate-fade-in-up">
            Безплатна консултация
        </a>

        <button @click="open = !open" class="md:hidden text-[#b01e45] focus:outline-none">
            ☰
        </button>

        <div x-show="open" @click.away="open = false" x-transition:enter="transition ease-out duration-300 transform"
            x-transition:enter-start="opacity-0 translate-x-full" x-transition:enter-end="opacity-100 translate-x-0"
            x-transition:leave="transition ease-in duration-300 transform"
            x-transition:leave-start="opacity-100 translate-x-0" x-transition:leave-end="opacity-0 translate-x-full"
            class="fixed top-0 right-0 w-full h-2/3 bg-gradient-to-b from-black to-gray-900 text-white flex flex-col items-center p-6 md:hidden space-y-4"
            style="display: none;">

            <button @click="open = false" class="absolute top-4 right-4 text-white text-2xl focus:outline-none">
                ✕
            </button>

            <a wire:navigate href="/" class="cursor-pointer">
                <img src="{{ asset('images/brand/logo.png') }}" alt="PromoCars BG" class="h-12 md:h-16">
            </a>
            
            <nav class="flex flex-col space-y-6 text-lg">
                <a wire:navigate href="/" @click="open = false"
                    class="hover:text-[#b01e45] cursor-pointer transition">Начало</a>
                <a wire:navigate href="/cars" @click="open = false"
                    class="hover:text-[#b01e45] cursor-pointer transition">Автомобили</a>
                <a wire:navigate href="/about" @click="open = false"
                    class="hover:text-[#b01e45] cursor-pointer transition">За нас</a>
                <a wire:navigate href="/contacts" @click="open = false"
                    class="hover:text-[#b01e45] cursor-pointer transition">Контакти</a>
            </nav>

            <div class="mt-20 w-full text-center">
                <a wire:navigate href="/contacts" @click="open = false"
                    class="bg-[#b01e45] text-white px-6 py-3 rounded-lg text-lg 
                    hover:bg-[#9a1b3d] transition">
                    Направи поръчка
                </a>
            </div>
        </div>
    </div>
</header>
