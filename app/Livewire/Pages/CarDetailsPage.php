<?php

namespace App\Livewire\Pages;

use Livewire\Component;
use App\Models\Car;

class CarDetailsPage extends Component
{
    public $car;

    public function mount($slug)
    {
        $this->car = Car::where('slug', $slug)->with('images')->firstOrFail();
    }

    public function render()
    {
        return view('livewire.pages.car-details-page', [
            'car' => $this->car
        ])->layout('components.layouts.app', [
            'metaTitle' => "{$this->car->brand->name} {$this->car->model} {$this->car->year} - Купи сега | PromoCars BG",
            'metaDescription' => "Разгледайте детайлите за {$this->car->brand->name} {$this->car->model} ({$this->car->year}). Цена: " . number_format($this->car->price, 2) . " лв. Пробег: {$this->car->mileage} км. Двигател: {$this->car->engine}, Трансмисия: {$this->car->transmission}. Най-добрите оферти за автомобили в България само в PromoCars BG!",
            'metaKeywords' => "купи {$this->car->brand->name} {$this->car->model}, {$this->car->brand->name} {$this->car->model} {$this->car->year}, {$this->car->brand->name} {$this->car->model} цена, употребявани {$this->car->brand->name}, {$this->car->brand->name} продажба, лизинг {$this->car->brand->name}, коли втора ръка, авто оферти, покупка на автомобили, {$this->car->brand->name} {$this->car->model} оферта, най-добра цена {$this->car->brand->name}",
            'metaAuthor' => 'PromoCars BG - Довереният ви партньор в покупката на автомобили',
            'metaImage' => $this->car->images->first() ? asset($this->car->images->first()->path) : asset('images/brand/logo.png'),
        ]);
    }
}
