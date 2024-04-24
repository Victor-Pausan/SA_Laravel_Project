<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerQuestion extends Model
{
    use HasFactory;

    public $fillable=[
        'first-name',
        'last-name',
        'email',
        'subject',
        'message',
    ];
}
