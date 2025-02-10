<?php

namespace App\Livewire\Pages;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Car;

class CarsPage extends Component {
    use WithPagination;

    public $selectedPriceRanges = [];
    public $selectedBrands = [];
    public $selectedYears = [];

    protected $queryString = [
        'selectedPriceRanges' => [],
        'selectedBrands' => [],
        'selectedYears' => [],
    ];

    protected $listeners = [
        'filtersUpdated' => 'updateFilters',
        'brandUpdated' => 'updateBrandFilter',
        'yearUpdated' => 'updateYearFilter',
    ];

    public function updateFilters($filters) {
        $this->selectedPriceRanges = $filters['selectedPriceRanges'] ?? [];
        $this->resetPage();
    }

    public function updateBrandFilter($filters) {
        $this->selectedBrands = $filters['selectedBrands'] ?? [];
        $this->resetPage();
    }

    public function updateYearFilter($filters) {
        $this->selectedYears = $filters['selectedYears'] ?? [];
        $this->resetPage();
    }

    public function render() {
        $query = Car::with(['images', 'brand'])->whereHas('images');

        if (!empty($this->selectedBrands)) {
            $query->whereIn('make_id', $this->selectedBrands);
        }

        if (!empty($this->selectedYears)) {
            $query->whereIn('year', $this->selectedYears);
        }

        if (!empty($this->selectedPriceRanges)) {
            $query->where(function ($q) {
                foreach ($this->selectedPriceRanges as $range) {
                    [$min, $max] = explode('-', $range);
                    $q->orWhereBetween('price', [$min, $max]);
                }
            });
        }

        $cars = $query->paginate(12)->withPath('custom');

        return view('livewire.pages.cars-page', compact('cars'))
            ->layout('components.layouts.app', [
                'metaTitle' => 'Купи автомобил | Разгледай всички налични коли в PromoCars BG',
                'metaDescription' => 'Разгледайте най-добрите оферти за нови и употребявани автомобили в България. Изберете от марки като BMW, Mercedes-Benz, Audi, Volkswagen, Toyota, Ford, Honda, Nissan, Peugeot и Renault. Купете своята мечтана кола с гаранция за качество!',
                'metaKeywords' => 'автомобили, коли, нови автомобили, употребявани автомобили, авто обяви, авто пазар, BMW, Mercedes, Audi, Volkswagen, Toyota, Ford, Nissan, Honda, Peugeot, Renault, Hyundai, Opel, Skoda, Volvo, Porsche, купи кола, лизинг автомобили, финансиране на коли, продажба на коли',
                'metaAuthor' => 'PromoCars BG - Довереният ви партньор в покупката на автомобили',
            ]);
    }
}
