<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MemberFeedback extends Model
{
    use HasFactory;

    protected $table = 'member_feedbacks';
    public function member()
    {
        return $this->hasMany(Member::class);
    }

    public function feedback()
    {
        return $this->hasMany(Feedback::class);
    }

    public function class()
    {
        return $this->hasMany(GymClass::class);
    }
}
