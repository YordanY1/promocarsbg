<div>
    <footer class="bg-gradient-to-b from-orange-500 to-black text-white py-10 px-6 md:px-16">
        <div class="container mx-auto grid grid-cols-1 md:grid-cols-3 gap-10 md:gap-6">

            <div class="space-y-4">
                <h2 class="text-3xl font-bold">PromoCars BG</h2>
                <p class="text-gray-300">Вашият надежден партньор за покупка на автомобили!</p>

                <div class="space-y-2">
                    <p>📞 <a href="tel:+359888123456" class="group relative inline-block text-gray-300">
                            +359 888 123 456
                            <span
                                class="absolute left-0 bottom-0 w-0 h-0.5 bg-orange-300 transition-all duration-300 group-hover:w-full"></span>
                        </a></p>

                    <p>📧 <a href="mailto:contact@promocars.bg" class="group relative inline-block text-gray-300">
                            contact@promocars.bg
                            <span
                                class="absolute left-0 bottom-0 w-0 h-0.5 bg-orange-300 transition-all duration-300 group-hover:w-full"></span>
                        </a></p>
                </div>

                <div class="flex space-x-4 mt-4">
                    <a href="#" class="group relative inline-block text-gray-300 hover:text-orange-300 text-2xl">
                        <i class="fa-brands fa-facebook"></i>
                    </a>
                    <a href="#" class="group relative inline-block text-gray-300 hover:text-orange-300 text-2xl">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                </div>
            </div>

            <div>
                <h3 class="text-xl font-semibold mb-3">Навигация</h3>
                <ul class="space-y-2">
                    <li><a wire:navigate href="{{ route('about') }}" class="group relative inline-block text-gray-300">
                            За нас
                            <span
                                class="absolute left-0 bottom-0 w-0 h-0.5 bg-orange-300 transition-all duration-300 group-hover:w-full"></span>
                        </a></li>
                    <li><a wire:navigate href="{{ route('reviews') }}"
                            class="group relative inline-block text-gray-300">
                            Отзиви
                            <span
                                class="absolute left-0 bottom-0 w-0 h-0.5 bg-orange-300 transition-all duration-300 group-hover:w-full"></span>
                        </a></li>
                    <li><a wire:navigate href="{{ route('faq') }}" class="group relative inline-block text-gray-300">
                            Въпроси и отговори
                            <span
                                class="absolute left-0 bottom-0 w-0 h-0.5 bg-orange-300 transition-all duration-300 group-hover:w-full"></span>
                        </a></li>
                    <li><a wire:navigate href="{{ route('contacts') }}"
                            class="group relative inline-block text-gray-300">
                            Контакти
                            <span
                                class="absolute left-0 bottom-0 w-0 h-0.5 bg-orange-300 transition-all duration-300 group-hover:w-full"></span>
                        </a></li>
                </ul>
            </div>

            <div>
                <h3 class="text-xl font-semibold mb-3">Автомобили</h3>
                <ul class="space-y-2">
                    <li><a wire:navigate href="{{ route('cars') }}" class="group relative inline-block text-gray-300">
                            Обяви
                            <span
                                class="absolute left-0 bottom-0 w-0 h-0.5 bg-orange-300 transition-all duration-300 group-hover:w-full"></span>
                        </a></li>
                </ul>
            </div>
        </div>

        <div class="border-t border-gray-600 mt-10 pt-4 text-center text-sm text-gray-400">
            <p>© 2025 Всички права запазени</p>
            <div class="mt-2 space-x-4">
                <a wire:navigate href="{{ route('policy-privacy') }}" class="group relative inline-block text-gray-300">
                    Политика за поверителност
                    <span
                        class="absolute left-0 bottom-0 w-0 h-0.5 bg-orange-300 transition-all duration-300 group-hover:w-full"></span>
                </a>
                <span>|</span>
                <a wire:navigate href="{{ route('cookie-policy') }}" class="group relative inline-block text-gray-300">
                    Бисквитки
                    <span
                        class="absolute left-0 bottom-0 w-0 h-0.5 bg-orange-300 transition-all duration-300 group-hover:w-full"></span>
                </a>
            </div>
        </div>
    </footer>
</div>
