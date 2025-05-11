<?php
namespace App\Http\Controllers;

use App\Models\TimePunchEntry;  // Ensure this is the correct model
use Illuminate\Http\Request;

class WorkLogController extends Controller
{
public function delete($id) // Pass the ID of the item to delete
{
// Find the record by ID
$timePunch = TimePunchEntry::findOrFail($id);

// Delete the record
$timePunch->delete();


    return redirect()->route('dashboard')->with('success', 'Time punch deleted successfully!');
}
public function timePunch(){
    return view('timePunchEntry');
}
}
