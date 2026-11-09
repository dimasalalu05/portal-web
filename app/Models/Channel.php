<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\HasMany;

class Channel extends Model
{
    protected $fillable = ['name_channel', 'slug', 'description'];

    /**
     * Relasi: Satu Channel mempunyai banyak kategori
     */
    public function categories(): HasMany
    {
        return $this->hasMany(Category::class, 'channel_id');
    }
}
