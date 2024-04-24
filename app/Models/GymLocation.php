<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GymLocation extends Model
{
    use HasFactory;

    public $fillable=[
        'address',
        'name',
        'picture-path'
    ];

    public function state()
    {
        return $this->hasMany(State::class);
    }

    public function member()
    {
        return $this->belongsTo(Member::class);
    }

    public function locationSchedule()
    {
        return $this->belongsTo(LocationSchedule::class);
    }

    public function gymClass()
    {
        return $this->belongsTo(GymClass::class);
    }
}
