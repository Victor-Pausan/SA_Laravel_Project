<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerQuestion extends Model
{
    use HasFactory;
    protected $table = 'questions';
    public $fillable=[
        'first_name',
        'last_name',
        'email',
        'subject',
        'message',
    ];
}
