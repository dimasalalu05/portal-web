<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Article extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    /**
     * Relasi: Artikel ini ditulis oleh seorang User (Author)
     */
    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class, 'author_id');
    }

    /**
     * Relasi: Artikel ini termasuk ke dalam suatu Kategori
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    /**
     * Relasi: Satu artikel mempunyai banyak sumber
     */

    public function article_sources(): HasMany
    {
        return $this->hasMany(Article_source::class, 'article_id');
    }
}
