<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContentBlock extends Model
{
    protected $fillable = [
        'key',
        'title',
        'block_type',
        'sort_order',
        'content',
        'locale',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean'
    ];

    public function items()
    {
        return $this->hasMany(ContentBlockItem::class,'block_id')
                    ->orderBy('sort_order');
    }
}
