<?php

namespace App\Livewire\Components;

use Livewire\Component;
use App\Models\Car;

class Carousel extends Component
{
    public function render()
    {
        $cars = Car::with(['images' => function ($query) {
                        $query->oldest()->limit(1); 
                    }])
                    ->latest()
                    ->take(12)
                    ->get();

        return view('livewire.components.carousel', compact('cars'));
    }
}
