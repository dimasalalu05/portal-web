<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Category;
use App\Models\Channel;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = Category::all();
        $users = User::all();

        foreach ($categories as $category) {
            // 3 artikel untuk SETIAP kategori asli dari seeder Anda
            Article::factory(3)->create([
                'category_id' => $category->id,
                'channel_id'  => $category->channel_id, // Otomatis ambil ID channel pasangannya
                'author_id'   => $users->random()->id,
            ]);
        }
    }
}
