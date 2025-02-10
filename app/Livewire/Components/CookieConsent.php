<?php

namespace App\Livewire\Components;

use Livewire\Component;

class CookieConsent extends Component
{
    public $show = true;

    public function accept()
    {
        session(['cookie_consent' => true]);
        $this->show = false;
    }

    public function decline()
    {
        session(['cookie_consent' => false]);
        $this->show = false;
    }

    public function mount()
    {
        $this->show = !session()->has('cookie_consent');
    }

    public function render()
    {
        return view('livewire.components.cookie-consent');
    }
}
