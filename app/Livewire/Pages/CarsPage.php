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

    protected $listeners = [ 'filtersUpdated' => 'updateFilters' ];

    public function updateFilters( $filters ) {
        $this->minPrice = $filters[ 'minPrice' ] ?? $this->minPrice;
        $this->maxPrice = $filters[ 'maxPrice' ] ?? $this->maxPrice;
        $this->selectedBrand = $filters[ 'brand' ] ?? $this->selectedBrand;

        $this->resetPage();
    }

    public function render() {
        $query = Car::with( [ 'images', 'brand' ] )
        ->whereHas( 'images' )
        ->whereBetween( 'price', [ $this->minPrice, $this->maxPrice ] );

        if ( $this->selectedBrand ) {
            $query->where( 'make_id', $this->selectedBrand );
        }

        $cars = $query->paginate( 12 );

        return view( 'livewire.pages.cars-page', compact( 'cars' ) )
        ->layout( 'components.layouts.app' );
    }
}
