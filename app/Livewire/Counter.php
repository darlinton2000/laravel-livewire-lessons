<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $number = true;

    public function render()
    {
        return view('livewire.counter');
    }
}
