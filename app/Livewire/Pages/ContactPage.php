<?php

namespace App\Livewire\Pages;

use Livewire\Component;

class ContactPage extends Component
{
    public function render()
    {
        return view('livewire.pages.contact-page')->layout('components.layouts.app', [
            'metaTitle' => 'Контакти | Свържете се с нас - PromoCars BG',
            'metaDescription' => 'Свържете се с PromoCars BG! Нашите авто експерти са тук, за да ви помогнат с избора на автомобил, лизинг, финансиране и всички въпроси свързани с покупка или продажба на коли. Посетете нашия офис или се свържете с нас по телефон или имейл.',
            'metaKeywords' => 'контакти, връзка с нас, автокъща, телефон за връзка, имейл, адрес, локация, сервиз, покупка на кола, продажба на автомобили, авто консултация, лизинг на коли, финансиране на автомобил, PromoCars BG контакти',
            'metaAuthor' => 'PromoCars BG - Довереният ви партньор в покупката на автомобили',
        ]);
    }
}
