<?php

namespace App\Livewire;

use Livewire\Component;

class Uses extends Component
{

    public $use_tab = 'electric_vehicles';
    public function render()
    {
        return view('livewire.uses');
    }

    public function select_use_tab($tab)
    {
        $this->use_tab = $tab;
    }
}
