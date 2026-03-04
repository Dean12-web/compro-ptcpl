<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ExportCountry extends Model
{
    protected $fillable = [ 
        'name',
        'iso_code',
        'flag_image',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean'
    ];
}
