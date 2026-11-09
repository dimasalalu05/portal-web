<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\User;
use App\Models\Channel;
use Database\Factories\ArticleFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        //  Panggil UserSeeder untuk membuat data baru
        $this->call([
            UserSeeder::class,
            ChannelSeeder::class,
        ]);

        // Buat artikel tanpa category
        Article::factory(20)->recycle(User::all())->create();
    }
}
