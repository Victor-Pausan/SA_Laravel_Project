<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GymLocation extends Model
{
    use HasFactory;

    protected $table = 'gym_locations';

    public $fillable=[
        'address',
        'name',
        'picture_path'
    ];

    public function state()
    {
        return $this->hasOne(State::class);
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
        return $this->hasOne(GymClass::class);
    }
}
