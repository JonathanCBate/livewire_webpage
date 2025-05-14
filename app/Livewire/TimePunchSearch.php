<?php

namespace App\Livewire;

use App\Models\TimePunchEntry;
use Livewire\Component;

class TimePunchSearch extends Component

{
    public $search;
    protected $queryString = ['search'];
    public function render()
    {


        return view('livewire.time-punch-serch', [
            'timePunches' => TimePunchEntry::where('description', 'like', '%'.$this->search.'%')->get(),
        ]);

    }
}
