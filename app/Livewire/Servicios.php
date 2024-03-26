<?php

namespace App\Livewire;

use App\Models\Service;
use Livewire\Component;

class Servicios extends Component
{
    public $services;
    
    public function render()
    {
        $this->services = Service::all();
        return view('livewire.servicios');
    }
}
