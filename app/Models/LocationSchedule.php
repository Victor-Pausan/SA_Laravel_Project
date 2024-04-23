<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LocationSchedule extends Model
{
    use HasFactory;

    public $fillable=[
        'gym-location-id',
        'schedule-id',
    ];
}
