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

        // 1. Cari Induknya (Model Channel)
        $channel = Channel::where('slug', 'nasional')->first();

        if ($channel) {
            $channel->categories()->createMany([
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
            ]);
        }
        // $categories = 

        // foreach ($categories as $category) {
        //     Category::create($category);
        // }
    }
}
