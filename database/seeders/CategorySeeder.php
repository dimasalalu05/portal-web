<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Channel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Mengambil file categori json
        $json = file_get_contents(database_path('data/categories.json'));

        $categoriesData = json_decode($json, true);

        // perulangan
        foreach ($categoriesData as $item) {

            // cari data induknys di database berdasarkan slug yang tertulis
            $channel = Channel::where('slug', $item['channel_slug'])->first();

            // jika channel ditemukkan, buat kategorinya menggunakan relasi
            if ($channel) {
                $channel->categories()->create([
                    'name_category' => $item['name_category'],
                    'slug' => $item['slug']
                ]);
            }
        }
    }
}
