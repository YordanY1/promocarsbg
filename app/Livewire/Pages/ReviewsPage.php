<?php

namespace App\Livewire\Pages;

use Livewire\Component;

class ReviewsPage extends Component
{
    public function render()
    {
        return view('livewire.pages.reviews-page')->layout('components.layouts.app', [
            'metaTitle' => 'Отзиви от клиенти | Мнения за автомобили и доволни клиенти - PromoCars BG',
            'metaDescription' => 'Разгледайте реални отзиви и мнения от клиенти на PromoCars BG! Доволни купувачи споделят своите впечатления от покупката на нови и употребявани автомобили. Вижте защо сме предпочитан избор за продажба на коли в България.',
            'metaKeywords' => 'отзиви, мнения, ревюта, доволни клиенти, клиенти на PromoCars BG, мнение за автомобили, покупка на коли, употребявани автомобили, нови коли, най-добри авто оферти, BMW ревю, Mercedes мнения, Audi отзиви, Toyota ревю, Honda мнения, лизинг автомобили, доверени дилъри, продажба на коли втора ръка',
            'metaAuthor' => 'PromoCars BG - Довереният ви партньор в покупката на автомобили',
        ]);
    }
}
