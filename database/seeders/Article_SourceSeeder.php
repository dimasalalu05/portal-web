<?php

namespace Database\Seeders;

use App\Models\Article_source;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Article_SourceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Article_source::factory(3)->create();
    }
}
