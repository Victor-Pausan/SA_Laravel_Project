<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    public $fillable=[
        'address',
        'membership_start_date',
        'membership_end_date', 
    ];

    public function user()
    {
        return $this->hasOne(User::class);
    }

    public function subscription()
    {
        return $this->hasOne(Subscription::class);
    }

    public function memberFeedback()
    {
        return $this->belongsTo(MemberFeedback::class);
    }

    public function gymLocation()
    {
        return $this->hasOne(GymLocation::class);
    }
}
