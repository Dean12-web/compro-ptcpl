<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContentBlock extends Model
{
    protected $fillable = [
        'key',
        'title',
        'content',
        'locale',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean'
    ];
}
