<?php

namespace Database\Factories;

use App\Models\Article;
use App\Models\ArticleSource;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<ArticleSource>
 */
class ArticleSourceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama_article_source' => fake()->name(),
            'url' => fake()->url(),
            // 'article_id' => Article::factory(),
            'article_id' => Article::inRandomOrder()->value('id') ?? Article::factory(),
        ];
    }
}
