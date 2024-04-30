<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LocationSchedule extends Model
{
    use HasFactory;

    protected $table = 'location_schedules';
    public function gymLocation()
    {
        return $this->hasMany(GymLocation::class);
    }

    public function schedule()
    {
        return $this->hasMany(Schedule::class);
    }
}
