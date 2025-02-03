<?php

namespace App\Livewire;

use App\Models\Student;
use Livewire\Component;
use Livewire\WithPagination;

class StudentsList extends Component
{
    use WithPagination;

    public $perPage =10;

    public $query;

    public function updatingQuery(){
        $this->resetPage();
    }

    public function render()
    {
        return view('livewire.students-list', [
            'students' => Student::where('name','like','%'.$this->query.'%')->paginate($this->perPage),
        ]);
    }
}
