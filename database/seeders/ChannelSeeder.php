<?php

namespace Database\Seeders;

use App\Models\Channel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ChannelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Mengambil file Channel Json
        $json = file_get_contents(database_path('data/channels.json'));

        $channels = json_decode($json, true);

        foreach ($channels as $channel) {
            Channel::create($channel);
        }
    }
}
