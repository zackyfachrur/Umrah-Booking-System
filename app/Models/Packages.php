<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Packages extends Model
{
    protected $table = 'packages';

    protected $fillable = [
        'name',
        'slug',
        'price',
        'duration_days',
        'departure_date',
        'return_date',
        'description',
        'country',
        'city',
        'image_path',
    ];
}
