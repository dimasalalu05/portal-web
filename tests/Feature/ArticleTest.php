<?php

namespace Tests\Feature;

use App\Models\User;
use App\Models\Article;
use App\Models\Category;
use App\Models\ArticleSource;
use App\Models\Channel;
// use Database\Seeders\ChannelSeeder;
use Database\Seeders\CategorySeeder;
use Database\Seeders\ChannelSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ArticleTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    use RefreshDatabase;
    public function test_example(): void
    {
        // $response = $this->get('/');


        // $response->assertStatus(200);
        // 1. Jalankan CategorySeeder (yang membaca file JSON Anda)
        $this->seed([
            ChannelSeeder::class,
            CategorySeeder::class,
        ]);
        $category = Category::first();

        // 2. Buat User & Article pakai Factory (isi category_id dari seeder JSON)
        $user = User::factory()->create();
        $article = Article::factory()->create([
            'author_id'   => $user->id,
            'category_id' => $category->id,
        ]);

        // 3. Buat 2 sumber artikel untuk artikel tersebut
        ArticleSource::factory(2)->create([
            'article_id' => $article->id,
        ]);

        // 4. Pastikan relasi di Model bekerja dengan benar
        $this->assertEquals($category->id, $article->category->id);
        $this->assertEquals($user->id, $article->author->id); // sesuaikan nama fungsi relasi user di model Article
        $this->assertCount(2, $article->article_sources); // sesuaikan nama fungsi relasi hasMany di model Article
    }
}
