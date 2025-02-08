<?php

namespace App\Livewire\Components;

use App\Models\Review;
use Livewire\Component;

class Reviews extends Component {
    public $limit = null;

    public function openModal( $reviewId ) {
        $this->dispatch( 'openModal', $reviewId );
    }

    public function render() {
        $query = Review::with( 'car' )->latest();
        if ( $this->limit ) {
            $query->take( $this->limit );
        }
        $reviews = $query->get();

        return view( 'livewire.components.reviews', compact( 'reviews' ) );
    }
}
