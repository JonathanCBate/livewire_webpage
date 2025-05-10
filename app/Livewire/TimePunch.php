<?php

namespace App\Livewire;

use Livewire\Component;

class TimePunch extends Component
{
    public array $timePunches = [];
    protected $listeners = ['elapsedTime'=>'createTimepunch'];
    public function createTimepunch($elapsedTime) {
        $this->timePunches[] = $elapsedTime;
    }
    public function render()
    {
        return view('livewire.time-punch');
    }
}
