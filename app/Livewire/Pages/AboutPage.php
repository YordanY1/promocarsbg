<?php

namespace App\Livewire\Pages;

use Livewire\Component;

class AboutPage extends Component
{
    public function render()
    {
        return view('livewire.pages.about-page')->layout('components.layouts.app', [
            'metaTitle' => 'За нас | PromoCars BG - Лидер в продажбата на автомобили в България',
            'metaDescription' => 'PromoCars BG е водеща платформа за покупка и продажба на нови и употребявани автомобили в България. Нашата мисия е да предоставим на клиентите най-качествените превозни средства на най-добрите цени. Работим с доказани марки като BMW, Mercedes-Benz, Audi, Volkswagen, Toyota, Honda, Nissan, Ford и много други. Гарантирано качество, прозрачни сделки и професионално обслужване. Открийте защо сме предпочитан избор за хиляди купувачи на автомобили в България!',
            'metaKeywords' => 'за нас, PromoCars BG, продажба на автомобили, нови автомобили, употребявани коли, купи кола, коли втора ръка, авто пазар България, BMW, Mercedes-Benz, Audi, Volkswagen, Toyota, Honda, Nissan, Ford, Hyundai, Peugeot, Renault, Skoda, SEAT, Volvo, Opel, Porsche, Lexus, Infiniti, електромобили, хибридни автомобили, лизинг, авто кредит, тест драйв, сертифицирани автомобили',
            'metaAuthor' => 'PromoCars BG - Довереният ви партньор в покупката на автомобили',
        ]);
    }
}
