<?php

namespace App\Livewire\Pages;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Car;

class CarsPage extends Component
{
    use WithPagination;

    public $search = '';
    public $brand = '';
    public $minPrice, $maxPrice;
    public $fuelType = '';
    public $sortBy = 'latest';

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $query = Car::query();

        if ($this->search) {
            $query->where('make', 'like', "%{$this->search}%")
                  ->orWhere('model', 'like', "%{$this->search}%");
        }

        if ($this->brand) {
            $query->where('make', $this->brand);
        }

        if ($this->minPrice) {
            $query->where('price', '>=', $this->minPrice);
        }

        if ($this->maxPrice) {
            $query->where('price', '<=', $this->maxPrice);
        }

        if ($this->fuelType) {
            $query->where('engine', $this->fuelType);
        }

        switch ($this->sortBy) {
            case 'price_asc':
                $query->orderBy('price', 'asc');
                break;
            case 'price_desc':
                $query->orderBy('price', 'desc');
                break;
            default:
                $query->latest();
                break;
        }

        $cars = $query->paginate(12);

        return view('livewire.pages.cars-page', compact('cars'))
            ->layout('components.layouts.app');
    }
}
