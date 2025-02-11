<?php

namespace App\Livewire;

use Livewire\Component;
use App\Service\LicensePriceCalculator;

class License extends Component
{
    public $teamSize = 2 ;

  
    
    public function render()
    {
        return view('livewire.license',[
            'amount'=>LicensePriceCalculator::calculatorPrice($this->teamSize)
        ]);
    }


}
