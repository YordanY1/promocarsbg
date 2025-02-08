<?php

namespace App\Livewire\Components;

use Livewire\Component;
use App\Models\Car;

class Carousel extends Component
{
    public function render()
    {
        $cars = Car::whereHas('images', function ($query) {
                        $query->where('path', 'like', '%front%');
                    })
                    ->with(['images' => function ($query) {
                        $query->where('path', 'like', '%front%');
                    }])
                    ->latest()
                    ->take(12)
                    ->get();

        return view('livewire.components.carousel', compact('cars'));
    }
}
