<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    // use SoftDeletes;

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

    protected $casts = [
        'is_active' => 'boolean'
    ];

    public function images()
    {
        return $this->hasMany(ProductImage::class);
    }

    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function primaryImage()
    {
        return $this->hasOne(ProductImage::class)->where('is_primary', true);
    }
}
