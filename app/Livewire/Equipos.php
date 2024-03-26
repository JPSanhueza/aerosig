<?php

namespace App\Livewire;

use App\Models\Equipment;
use Livewire\Component;

class Equipos extends Component
{
    public $equipments;
    
    public function render()
    {
        $this->equipments = Equipment::all();
        return view('livewire.equipos');
    }
}
