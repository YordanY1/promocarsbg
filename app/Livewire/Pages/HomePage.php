<?php

namespace App\Livewire\Pages;

use Livewire\Component;

class HomePage extends Component
{
    public function render()
    {
        return view('livewire.pages.home-page')->layout('components.layouts.app', [
            'metaTitle' => 'Купи автомобил изгодно | Най-добрите оферти за нови и употребявани коли в България | PromoCars BG',
            'metaDescription' => 'Открийте най-добрите оферти за нови и употребявани автомобили в България! Разгледайте голямо разнообразие от марки като BMW, Mercedes-Benz, Audi, Toyota, Volkswagen, Honda, Ford, Nissan, Peugeot, Renault и много други. Всички коли са внимателно проверени и предлагаме най-изгодните цени на пазара. Гарантирано качество, лизинг и бързо одобрение. Поръчайте тест драйв и купете своята мечтана кола днес!',
            'metaKeywords' => 'автомобили, коли, продажба на коли, употребявани автомобили, нови автомобили, авто оферти, BMW, Mercedes, Audi, Toyota, Volkswagen, Honda, Ford, Nissan, Peugeot, Renault, Hyundai, Skoda, SEAT, Alfa Romeo, Volvo, Porsche, лизинг автомобили, коли втора ръка, купи автомобил, авто продажби',
            'metaAuthor' => 'PromoCars BG - Довереният ви партньор в покупката на автомобили',
        ]);
    }
}
