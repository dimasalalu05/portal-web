<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Guarded;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Factories\ArticleFactory;


class Article extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    // one to one
    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
