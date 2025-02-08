<?php

namespace App\Livewire\Pages;

use Livewire\Component;

class ContactPage extends Component
{
    public function render()
    {
        return view('livewire.pages.contact-page')->layout('components.layouts.app');
    }
}
