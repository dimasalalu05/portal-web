<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name_category' => 'Jadi Perhatian',
                'slug' => 'jadi-perhatian'
            ],
            [
                'name_category' => 'Transportasi publik',
                'slug' =>   'transportaso-publik'
            ],
            [
                'name_category' => 'Ekonomi Hijau',
                'slug' => 'ekonomi-hijau'
            ],
            [
                'name_category' => 'Ruang Digital',
                'slug' => 'ruang-digital'
            ],
            [
                'name_category' => 'Kota Untuk Semua',
                'slug' => 'kota-untuk-semua'
            ]
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
