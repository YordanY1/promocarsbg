<?php

namespace App\Livewire\Components;

use Livewire\Component;
use App\Models\Promotion;

class Promotions extends Component
{
    public function render()
    {
        $promotions = Promotion::latest()->take(3)->get();
        return view('livewire.components.promotions', compact('promotions'));
    }
}
