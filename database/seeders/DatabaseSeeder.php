<?php

namespace Database\Seeders;

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

        $startTime = microtime(true);

        //  Panggil UserSeeder untuk membuat data baru
        $this->call([
            UserSeeder::class,
            ChannelSeeder::class,
            CategorySeeder::class,
            ArticleSeeder::class,
            ArticleSourceSeeder::class,
        ]);

        $endTime = microtime(true);
        $peakMemory = round(memory_get_peak_usage(true) / 1024 / 1024, 2);
        $duration = round($endTime - $startTime, 2);

        // Menampilkan hasil langsung di terminal saat php artisan db:seed
        $this->command->info("Selesai dalam {$duration} detik | Puncak RAM: {$peakMemory} MB");
    }
}
