<?php

namespace App\Livewire\Pages;

use Livewire\Component;
use App\Models\FAQ;

class FaqPage extends Component
{
    public $faqs;

    public function mount()
    {
        $this->faqs = FAQ::all();
    }

    public function render()
    {
        return view('livewire.pages.faq-page', [
            'faqs' => $this->faqs
        ])->layout('components.layouts.app');
    }
}
