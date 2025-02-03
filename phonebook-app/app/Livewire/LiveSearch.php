<?php

namespace App\Livewire;

use App\Service\phonebook;
use Livewire\Component;

class LiveSearch extends Component
{
    public $name;

    public $contacts = [];


    public function searchByName(){

        if (!empty($this->name)) {
          
            sleep(1);

            $results = phonebook::searchByName($this->name);

            if(empty($results)){
                session()->flash('message','No contact matching "' .$this->name .'".');
            }

            $this->contacts = $results;

        }

        

    }

    public function render()
    {
        return view('livewire.live-search');
    }
}
