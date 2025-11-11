<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Song;

class SongSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Song::insert([
            ['title' => 'God-ish', 'cover_image' => 'god-ish.png', 'artist' => 'PinocchioP', 'released' => '2021-09-17', 'audio_file' => 'god-ish.mp3'],
        ]);
    }
}
