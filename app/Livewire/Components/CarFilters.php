<?php

namespace App\Livewire\Components;

use Livewire\Component;
use App\Models\CarMake;
use App\Models\Car;

class CarFilters extends Component
{
    public $selectedPriceRanges = [];
    public $selectedMakes = [];
    public $selectedYears = [];
    public $brands;
    public $availableYears = [];

    protected $listeners = ['updateFilters'];

    public function mount()
    {
        $this->brands = CarMake::whereHas('cars')->get();
        $this->availableYears = Car::distinct()->orderBy('year', 'desc')->pluck('year')->toArray();
    }

    public function togglePriceRange($min, $max)
    {
        $range = "{$min}-{$max}";

        if (in_array($range, $this->selectedPriceRanges)) {
            $this->selectedPriceRanges = array_filter($this->selectedPriceRanges, fn($r) => $r !== $range);
        } else {
            $this->selectedPriceRanges[] = $range;
        }

        $this->dispatch('filtersUpdated', ['selectedPriceRanges' => $this->selectedPriceRanges]);
    }

    public function toggleMake($makeId)
    {
        if (in_array($makeId, $this->selectedMakes)) {
            $this->selectedMakes = array_filter($this->selectedMakes, fn($id) => $id !== $makeId);
        } else {
            $this->selectedMakes[] = $makeId;
        }

        $this->dispatch('brandUpdated', ['selectedBrands' => $this->selectedMakes]);
    }

    public function toggleYear($year)
    {
        if (in_array($year, $this->selectedYears)) {
            $this->selectedYears = array_filter($this->selectedYears, fn($y) => $y !== $year);
        } else {
            $this->selectedYears[] = $year;
        }

        $this->dispatch('yearUpdated', ['selectedYears' => $this->selectedYears]);
    }

    public function resetFilters()
    {
        $this->selectedPriceRanges = [];
        $this->selectedMakes = [];
        $this->selectedYears = [];

        $this->dispatch('filtersUpdated', ['selectedPriceRanges' => []]);
        $this->dispatch('brandUpdated', ['selectedBrands' => []]);
        $this->dispatch('yearUpdated', ['selectedYears' => []]);
    }

    public function render()
    {
        return view('livewire.components.car-filters', [
            'brands' => $this->brands,
            'availableYears' => $this->availableYears
        ]);
    }
}
