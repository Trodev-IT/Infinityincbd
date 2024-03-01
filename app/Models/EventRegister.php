<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventRegister extends Model
{
    use HasFactory;

    protected $fillable = [
        'slno',
        'event_id',
        'player_name',
        'player_email',
        'player_phone',
        'payment',
        'transaction',
        'status',
    ];
}
