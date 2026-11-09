<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Category extends Model
{
    protected $fillable = ['name_category', 'slug', 'channel_id'];

    protected function channel(): BelongsTo
    {
        return $this->belongsTo(Channel::class);
    }
}
