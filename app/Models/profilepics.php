<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class profilepics extends Model
{
    use HasFactory;

    protected $fillable = [
        'Pics',
        'title',
        'subtitle',
        'created_at',
        'updated_at'
    ];
}
