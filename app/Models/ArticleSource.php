<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class ArticleSource extends Model
{
    use HasFactory;

    protected $fillable = ['nama_article_source', 'url', 'article_id'];

    /**
     * Relasi: Setiap sumber artikel merujuk pada satu artikel utama 
     */

    public function article(): BelongsToMany
    {
        return $this->belongsToMany(Article::class, 'article_id');
    }
}
