<div class="container mx-auto py-16 px-6">
    <div class="flex flex-col lg:flex-row bg-white shadow-lg rounded-lg overflow-hidden">
        <div class="lg:w-1/2 p-12 flex flex-col justify-center">
            <h2 class="text-4xl font-bold text-[#b01e45] mb-6">Свържете се с нас</h2>
            <p class="text-gray-600 mb-6 text-lg">Изпратете ни съобщение и нашите експерти ще се свържат с вас възможно най-скоро.</p>

            <div x-data="{ open: false, message: '' }" 
                @success.window="open = true; message = $event.detail.message; setTimeout(() => open = false, 4000);" 
                x-show="open" x-transition 
                class="bg-green-500 text-white p-4 rounded-md mb-4 text-center shadow-lg">
                <span x-text="message"></span>
            </div>

            <form wire:submit.prevent="sendEmail" class="space-y-6">
                <div>
                    <label class="block text-gray-700 font-semibold text-lg">Име</label>
                    <input type="text" wire:model="name" placeholder="Вашето име"
                        class="w-full mt-2 px-4 py-3 border border-gray-300 rounded-lg focus:ring focus:ring-[#b01e45] text-lg">
                    @error('name') <span class="text-red-500">{{ $message }}</span> @enderror
                </div>

                <div>
                    <label class="block text-gray-700 font-semibold text-lg">Имейл</label>
                    <input type="email" wire:model="email" placeholder="example@email.com"
                        class="w-full mt-2 px-4 py-3 border border-gray-300 rounded-lg focus:ring focus:ring-[#b01e45] text-lg">
                    @error('email') <span class="text-red-500">{{ $message }}</span> @enderror
                </div>

                <div>
                    <label class="block text-gray-700 font-semibold text-lg">Телефон</label>
                    <input type="text" wire:model="phone" placeholder="+359 888 123 456"
                        class="w-full mt-2 px-4 py-3 border border-gray-300 rounded-lg focus:ring focus:ring-[#b01e45] text-lg">
                    @error('phone') <span class="text-red-500">{{ $message }}</span> @enderror
                </div>

                <div>
                    <label class="block text-gray-700 font-semibold text-lg">Съобщение</label>
                    <textarea rows="5" wire:model="message" placeholder="Вашето съобщение"
                        class="w-full mt-2 px-4 py-3 border border-gray-300 rounded-lg focus:ring focus:ring-[#b01e45] text-lg"></textarea>
                    @error('message') <span class="text-red-500">{{ $message }}</span> @enderror
                </div>

                <button type="submit"
                    class="w-full bg-[#b01e45] text-white py-3 rounded-lg font-semibold text-lg hover:bg-[#9a1b3d] transition-all duration-300">
                    Изпрати съобщение
                </button>
            </form>
        </div>

        <div class="lg:w-1/2">
            <iframe 
                class="w-full h-full min-h-[500px]"
                frameborder="0"
                style="border:0"
                allowfullscreen
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"
                src="https://www.google.com/maps/place/4199+%D0%A2%D1%80%D1%83%D0%B4/@42.2322658,24.7292779,15z/data=!3m1!4b1!4m6!3m5!1s0x14acd2bd99262ce5:0xa00a014cd0f3f40!8m2!3d42.2311334!4d24.7243554!16s%2Fg%2F1229qpbp?entry=ttu&g_ep=EgoyMDI1MDIxMi4wIKXMDSoASAFQAw%3D%3D">
            </iframe>
        </div>
    </div>
</div>
