<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'slug',
        'name',
        'description',
        'dimensions',
        'weight',
        'capacity',
        'material',
        'is_active',
        'created_by'
    ];

    public function images()
    {
        // return $this->hasMany();
    }

    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }
}
