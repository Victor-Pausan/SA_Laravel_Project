<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GymClass extends Model
{
    use HasFactory;

    protected $table = 'classes';

    public $fillable=[
        'name',
        'description',
        'date',
        'time',
        'duration',
        'trainer_name',
        'picture_path',
    ];

    public function memberFeedback()
    {
        return $this->belongsTo(MemberFeedback::class);
    }

    public function gymLocation()
    {
        return $this->belongsTo(GymLocation::class);
    }
}
