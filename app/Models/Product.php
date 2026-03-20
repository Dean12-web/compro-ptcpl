<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Arr;

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
        'is_active' => 'boolean',
        'description' => 'array',
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }

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

    public function getDescriptionForLocale(string $locale = null): string
    {
        $locale = $locale ?? app()->getLocale();
        $values = $this->description;

        if (is_string($values)) {
            return $values;
        }

        if (is_array($values)) {
            if (!empty($values[$locale])) {
                return $values[$locale];
            }

            if (!empty($values['en'])) {
                return $values['en'];
            }

            return (string) Arr::first(array_filter($values));
        }

        return '';
    }
}
