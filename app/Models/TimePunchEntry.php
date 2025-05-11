<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TimePunchEntry extends Model
{
    protected $fillable = ['description', 'time', 'date_created'];
}
