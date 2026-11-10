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
            Article::class,
            Category::class,
            'channel_id',
            'category_id',
            'id',
            'id',
        );
    }
}
