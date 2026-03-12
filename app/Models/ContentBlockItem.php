<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContentBlockItem extends Model
{
    protected $fillable = [
        'block_id',
        'field_key',
        'field_label',
        'field_type',
        'field_value',
        'sort_order'
    ];

    public function block()
    {
        return $this->belongsTo(ContentBlock::class,'block_id');
    }
}
