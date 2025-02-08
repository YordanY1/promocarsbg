<?php

namespace App\Livewire\Components;

use App\Models\Review;
use Livewire\Component;

class ReviewModal extends Component
{
    public $isOpen = false; 
    public $review; 

    protected $listeners = ['openModal' => 'showModal'];

    public function showModal($reviewId)
    {
        $this->review = Review::with('car')->find($reviewId);
        $this->isOpen = true;
    }

    public function closeModal()
    {
        $this->isOpen = false;
    }

    public function render()
    {
        return view('livewire.components.review-modal');
    }
}
