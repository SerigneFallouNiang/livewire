<?php

namespace App\Livewire;

use App\Service\Stats;
use Livewire\Component;

class SalesDashboard extends Component
{

    // public $newOrders;

    // public $salesAmount;

    // public $satisfactions;

    // protected $listeners = ['fetchStats' => 'refresh'];

    // public function mount()
    // {
    //     $this->assignStats();
    // }

 

    // public function refresh()
    // {
    //     $this->assignStats();
    // }

    // private function assignStats(){

    //     $this->fill([
    //         'newOrders' => Stats::newOrders(),
    //         'salesAmount' => Stats::salesAmount(),
    //         'satisfactions' => Stats::satisfactions(),
    //     ]);
       
    // }

    public function render()
    {
        return view('livewire.sales-dashboard',[
            'newOrders' => Stats::newOrders(),
            'salesAmount' => Stats::salesAmount(),
            'satisfactions' => Stats::satisfactions(),
        ]);
    }
}
