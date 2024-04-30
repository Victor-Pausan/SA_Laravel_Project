<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    use HasFactory;

    public $fillable=[
        'name',
        'info',
        'picture_path'
    ];

    public function gymLocation()
    {
        return $this->belongsTo(GymLocation::class);
    }
}
