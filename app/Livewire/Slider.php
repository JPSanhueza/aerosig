<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\ImageCarousel;

class Slider extends Component
{
    public $slides;
    
    public function render()
    {
        $this->slides = ImageCarousel::orderBy('order', 'asc')->get();
        return view('livewire.slider');
    }
}
