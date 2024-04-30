<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    use HasFactory;

    public $fillable=[
        'rating',
        'comment',
    ];

    public function memberFeedback()
    {
        return $this->belongsTo(MemberFeedback::class);
    }
}
