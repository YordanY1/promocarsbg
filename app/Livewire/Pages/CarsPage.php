<?php

namespace App\Livewire\Pages;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Car;

class CarsPage extends Component {
    use WithPagination;

    public $minPrice = 0;
    public $maxPrice = 300000;
    public $selectedBrand = null;

    protected $queryString = [
        'minPrice' => [],
        'maxPrice' => [],
        'selectedBrand' => [],
    ];

    protected $listeners = [
        'filtersUpdated' => 'updateFilters',
        'brandUpdated' => 'updateBrandFilter'
    ];

    public function updateFilters($filters) {
        $this->minPrice = $filters['minPrice'] ?? $this->minPrice;
        $this->maxPrice = $filters['maxPrice'] ?? $this->maxPrice;
        $this->resetPage();
    }

    public function updateBrandFilter($filters) {
        $this->selectedBrand = $filters['selectedBrand'] ?? null;
        $this->resetPage();
    }

    public function render() {
        $query = Car::with(['images', 'brand'])->whereHas('images');

        if ($this->selectedBrand) {
            $query->where('make_id', $this->selectedBrand);
        }

        $cars = $query->whereBetween('price', [$this->minPrice, $this->maxPrice])->paginate(12);

        return view('livewire.pages.cars-page', compact('cars'))
            ->layout('components.layouts.app');
    }
}
