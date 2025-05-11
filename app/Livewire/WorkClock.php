<?php

namespace App\Livewire;
use Carbon\Carbon;
use Livewire\Component;


class WorkClock extends Component
{
    public $title = 'My Work Clock';
    public ?Carbon $startTime = null;
    public string $buttonText = 'Start';
    public bool $clockRunning = false;
    public string $elapsedTime = '00:00:00';
    public $Time = null;
    public string $workDescription = '';
    public function displayTime()
    {
        $this->clockRunning = $this->clockRunning === false ? true : false;
        $this->buttonText = $this->buttonText === 'Start' ? 'Finish' : 'Start';
        if ($this->clockRunning) {
            $this->startClock();
        } else {
            $this->stopClock();
        }
    }
    public function startClock()
    {
        $time = 0;
        $this->startTime = Carbon::now();
    }
    public function updateElapsedTime() {
    if ($this->startTime) {
        $now = Carbon::now();
        $elapsedSeconds = $this->startTime->diffInSeconds($now);
        $this->elapsedTime = gmdate('H:i:s', $elapsedSeconds);
    }
    }
    public function stopClock() {
        $this->updateElapsedTime();
        $this->sendToTimepunch();
        $this->elapsedTime = '00:00:00';
        $this->startTime = null;
        $this->workDescription = '';
    }
    public function sendToTimepunch()
    {
        $this->dispatch('elapsedTime', $this->elapsedTime, $this->workDescription);

    }



    public function render()
    {
        return view('livewire.work-clock');
    }
}
