<?php

namespace Database\Factories;

use App\Models\Model;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends Factory<Model>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $post = fake()->sentence(rand(6, 8));
        return [
            'title' => $post,
            'slug' => Str::slug($post),
            'content' => fake()->text(),
            'thumbnail' => fake()->image(),
            'image_source_url' => fake()->imageUrl(),
            'image_license' => fake()->isbn10(),

            'author_id' => User::factory(),
            'category_id' => null,
            // 'channel_id' => null,
        ];
    }
}
