<?php

namespace App\Livewire\Pages;

use Livewire\Component;

class CookiePolicy extends Component
{
    public function render()
    {
        return view('livewire.pages.cookie-policy')->layout('components.layouts.app');
    }
}
