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

        $cars = $query->paginate(12);

        return view('livewire.pages.cars-page', compact('cars'))
            ->layout('components.layouts.app');
    }
}
