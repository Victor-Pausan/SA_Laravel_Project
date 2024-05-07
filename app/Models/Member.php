<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    public $fillable=[
        'membership_start_date',
        'membership_end_date', 
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function subscription()
    {
        return $this->belongsTo(Subscription::class);
    }

    public function memberFeedbacks()
    {
        return $this->hasMany(MemberFeedback::class);
    }

    public function gymLocation()
    {
        return $this->belongsTo(GymLocation::class);
    }
}
