<?php

namespace App\Livewire\Pages;

use Livewire\Component;
use App\Models\Car;

class CatalogPage extends Component
{
    public function render()
    {
        return view('livewire.pages.catalog-page')->layout('components.layouts.app');
    }
}
