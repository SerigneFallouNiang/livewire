<?php

namespace App\Livewire;

use Livewire\Component;

class Light extends Component
{
    public $brightness = 10;

    
    public function off()
    {
        $this->brightness = 0;
    }

    public function increment()
    {
        if ($this->brightness <= 90) { 
            $this->brightness += 10;
        }
        
    }

    public function decrement()
    {
        if($this->brightness >= 10){
            $this->brightness -= 10;
        }
    }

    public function turnOn()
    {
        $this->brightness = 100;
    }

    public function render()
    {
        return view('livewire.light');
    }
}
