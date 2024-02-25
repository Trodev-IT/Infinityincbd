<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VisitorTable extends Model
{
    use HasFactory;

    protected $fillable =[
        'ip_address',
        'visit_count',
        'countryName',
        'countryCode',
        'regionName',
        'regionCode',
        'cityName',
        'zipCode',
        'latitude',
        'longitude',
        'areaCode',
        'timezone',
    ];
}
