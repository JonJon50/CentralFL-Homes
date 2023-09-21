<?php

namespace App\Livewire;

use Livewire\Component;

class Carousel extends Component
{
    public $images = [
        'images/houses/ici1.jpeg',
        'images/houses/ici2.jpeg',
        'images/houses/ici3.jpeg',
        'images/houses/ici4.jpeg',
        'images/houses/ici5.jpeg',
    ];
    

    public function render()
    {
        return view('livewire.carousel');
    }
}
// John Hagens