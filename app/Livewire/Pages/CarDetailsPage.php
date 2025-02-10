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
        ])->layout('components.layouts.app');
    }
}
