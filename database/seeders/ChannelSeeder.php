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
        $channels = [
            [
                'name_channel' => 'Nasional',
                'slug' => 'nasional',
                'description' => 'channel nasional'
            ],
            [
                'name_channel' => 'Ekonomi',
                'slug' => 'ekonomi',
                'description' => 'channel ekonomi'
            ],
            [
                'name_channel' => 'Teknologi',
                'slug' => 'teknologi',
                'description' => 'channel teknologi'
            ],
            [
                'name_channel' => 'Olahraga',
                'slug' => 'olahraga',
                'description' => 'channel olahraga'
            ],
            [
                'name_channel' => 'Gaya Hidup',
                'slug' => 'gaya-hidup',
                'description' => 'channel gaya hidup'
            ],
            [
                'name_channel' => 'Internasional',
                'slug' => 'internasional',
                'description' => 'channel internasional'
            ],
            [
                'name_channel' => 'Opini',
                'slug' => 'opini',
                'description' => 'channel teknologi'
            ],
            [
                'name_channel' => 'Video',
                'slug' => 'video',
                'description' => 'channel video '
            ],
            [
                'name_channel' => 'Liputan Khsusus',
                'slug' => 'liputan-khusus',
                'description' => 'channel liputan kkhusus'
            ],

        ];

        foreach ($channels as $channel) {
            Channel::create($channel);
        }
    }
}
