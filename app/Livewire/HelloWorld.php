<?php

namespace App\Livewire;

use Livewire\Component;

class HelloWorld extends Component
{
    public $name = 'Darlinton Luis';
    public $salutation = 'Hello';
    public $color = 'white';
    public $salutationOptions = ['Hello', 'Bye Bye'];

    public function render()
    {
        return view('livewire.hello-world');
    }
}
