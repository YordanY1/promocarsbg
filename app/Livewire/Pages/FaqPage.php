<?php

namespace App\Livewire\Pages;

use Livewire\Component;
use App\Models\FAQ;

class FaqPage extends Component
{
    public $faqs;

    public function mount()
    {
        $this->faqs = FAQ::all();
    }

    public function render()
    {
        return view('livewire.pages.faq-page', [
            'faqs' => $this->faqs
        ])->layout('components.layouts.app', [
            'metaTitle' => 'Често задавани въпроси (FAQ) | Всичко за покупка и продажба на коли - PromoCars BG',
            'metaDescription' => 'Открийте отговори на най-често задаваните въпроси относно покупка, продажба, лизинг и финансиране на автомобили в PromoCars BG. Разберете как да изберете най-добрия автомобил и какви са стъпките за покупка на нова или употребявана кола.',
            'metaKeywords' => 'FAQ, често задавани въпроси, помощ, покупка на кола, продажба на кола, лизинг, финансиране, гаранция, сервиз, регистрация, данъци, документи за покупка на кола, употребявани автомобили, PromoCars BG',
            'metaAuthor' => 'PromoCars BG - Довереният ви партньор в покупката на автомобили',
        ]);
    }
}
