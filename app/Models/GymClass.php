<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GymClass extends Model
{
    use HasFactory;

    public $fillable=[
        'name',
        'description',
        'date',
        'time',
        'duration',
        'trainer-name',
        'picture-path',
    ];

    public function memberFeedback()
    {
        return $this->belongsTo(MemberFeedback::class);
    }

    public function gymLocation()
    {
        return $this->hasOne(GymLocation::class);
    }
}
