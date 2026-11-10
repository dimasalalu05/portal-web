<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

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

    /**
     * Relasi: Channel punya banyak articel melalui Kategori
     */

    public function articles(): HasManyThrough
    {
        return $this->hasManyThrough(
            Article::class, // Model tujuan akhir 
            Category::class, // Model perantara
            'channel_id', // Fk di tabel category
            'category_id', // FK di tabel article
            'id', // Local key di table channel
            'id', // Local key di table category
        );
    }
}
