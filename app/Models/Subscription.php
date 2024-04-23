<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    use HasFactory;

    public $fillable=[
        'type',
    ];

    public function member()
    {
        return $this->belongsTo(Member::class);
    }
}
