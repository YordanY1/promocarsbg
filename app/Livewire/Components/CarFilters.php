<?php

namespace App\Livewire\Components;

use Livewire\Component;
use App\Models\CarMake;

class CarFilters extends Component {
    public $minPrice = 0;
    public $maxPrice = 300000;
    public $selectedMake = null;

    public $brands;

    protected $listeners = [ 'updateFilters' ];

    public function mount() {

        $this->brands = CarMake::all();
    }

    public function setPriceRange( $min, $max ) {
        $this->minPrice = $min;
        $this->maxPrice = $max;

        $this->dispatch( 'filtersUpdated', [
            'minPrice' => $this->minPrice,
            'maxPrice' => $this->maxPrice,
            'make' => $this->selectedMake,
        ] );
    }

    public function setMakeFilter( $makeId ) {
        $this->selectedMake = $this->selectedMake === $makeId ? null : $makeId;

        $this->dispatch( 'filtersUpdated', [
            'minPrice' => $this->minPrice,
            'maxPrice' => $this->maxPrice,
            'selectedBrand' => $this->selectedMake,
        ] );
    }

    public function resetFilters() {
        $this->minPrice = 0;
        $this->maxPrice = 300000;
        $this->selectedMake = null;

        $this->dispatch( 'filtersUpdated', [
            'minPrice' => $this->minPrice,
            'maxPrice' => $this->maxPrice,
            'make' => $this->selectedMake,
        ] );
    }

    public function render() {
        return view( 'livewire.components.car-filters', [
            'brands' => $this->brands,
        ] );
    }
}
