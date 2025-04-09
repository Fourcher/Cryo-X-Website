<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Basket;
use Livewire\Attributes\On; 

class BasketCount extends Component
{
    public $count = 0;
    public $basket;

    protected $listeners = ['basketUpdated' => 'updateCount'];

    public function mount()
    {
        $this->updateCount();
    }


    #[On('basketUpdated')]
    public function updatedBasket()
    {
        $this->updateCount();
    }   

    public function updateCount()
    {
        $basket = Basket::where('session_id', session()->getId())
                        ->where('status', 'open')
                        ->first();




        $this->basket = $basket;
        $this->count = $basket ? $basket->items->sum('amount') : 0;



    }

    public function render()
    {
        return view('livewire.basket-count');
    }
}
