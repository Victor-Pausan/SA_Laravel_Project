<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;

    public $fillable=[
        'day_of_week',
        'opening_time',
        'closing_time',
    ];

    public function locationSchedule()
    {
        return $this->belongsTo(LocationSchedule::class);
    }
}
