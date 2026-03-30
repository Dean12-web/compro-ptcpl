<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SeoPage extends Model
{
    protected $fillable = [
        'page',
        'locale',
        'title',
        'description',
        'keywords',
        'og_image'
    ];
}
