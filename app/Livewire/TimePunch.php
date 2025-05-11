<?php
namespace App\Livewire;

use App\Models\TimePunchEntry;
use Livewire\Component;

class TimePunch extends Component
{
public array $timePunches = [];

// Listen for the 'elapsedTime' event and call the createTimepunch method
protected $listeners = ['elapsedTime' => 'createTimepunch'];

// This method is called when the 'elapsedTime' event is fired
public function createTimepunch($elapsedTime, $workDescription) {
// Insert the new TimePunchEntry into the database
TimePunchEntry::create([
'description' => $workDescription,
'time' => $elapsedTime,
'date_created' => now()->format('F, j, Y, g:i a'),
]);
}

// Fetch and render the time punches
public function render()
{
// Fetch all time punches and convert the collection to an array
$this->timePunches = TimePunchEntry::all()->toArray();

return view('livewire.time-punch');
}
}
