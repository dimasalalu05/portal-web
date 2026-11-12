<?php

namespace Database\Factories;

use App\Models\Article;
use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Model>
 */
class Article_SourceFactory extends Factory
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
            'article_id' => Article::factory(),
        ];
    }
}
