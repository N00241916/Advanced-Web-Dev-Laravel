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
            ['title' => 'God-ish', 'cover_image' => 'godish.png', 'artist' => 'PinocchioP', 'released' => '2021-09-17', 'song_link' => 'https://www.youtube.com/embed/EHBFKhLUVig?si=1-9R82NsIbgHIS_Z'],
            ['title' => 'Meltdown', 'cover_image' => 'meltdown.png', 'artist' => 'iroha(sasaki)', 'released' => '2008-12-19', 'song_link' => 'https://www.youtube.com/embed/dSw8CucthGc?si=q3JVBZZFfIgWLwaE'],
            ['title' => 'Rolling Girl', 'cover_image' => 'rolling_girl.png', 'artist' => 'wowoka', 'released' => '2010-02-14', 'song_link' => 'https://www.youtube.com/embed/vnw8zURAxkU?si=hIKPjB7be47Y9-K0'],
            ['title' => 'Lagtrain', 'cover_image' => 'lagtrain.png', 'artist' => 'INABAKUMORI', 'released' => '2020-07-16', 'song_link' => 'https://www.youtube.com/embed/UnIhRpIT7nc?si=q73Rmbk9PixhL5a1'],
            ['title' => 'Birdbrain', 'cover_image' => 'birdbrain.png', 'artist' => 'Jamie Paige', 'released' => '2025-06-28', 'song_link' => 'https://www.youtube.com/embed/0iVlSNpq8i8?si=NMKnwGAX9mpmlp-A'],
            ['title' => 'Luka Luka ★ Night Fever', 'cover_image' => 'night_fever.png', 'artist' => 'samfree', 'released' => '2009-02-12', 'song_link' => 'https://embed.nicovideo.jp/watch/sm6119955/script?w=320&h=180'],
            ['title' => 'Change me', 'cover_image' => 'change_me.png', 'artist' => 'shu-t', 'released' => '2009-11-05', 'song_link' => 'https://www.youtube.com/embed/Y_DzUshhdBQ?si=ldac0Pl-FXLhO-nP'],
            ['title' => 'Envy Baby', 'cover_image' => 'envy_baby.png', 'artist' => 'Kanaria', 'released' => '2021-02-13', 'song_link' => 'https://www.youtube.com/embed/dgS6HvEohsw?si=Y9-dlGM_v-mxZBul'],
            ['title' => 'Young Girl A', 'cover_image' => 'young_girl.png', 'artist' => 'Siinamota', 'released' => '2013-10-13', 'song_link' => 'https://www.youtube.com/embed/AqI97zHMoQw?si=X_IDtFjBLBbCqIz6'],
            ['title' => 'Medicine', 'cover_image' => 'medicine.png', 'artist' => 'Sasuke Haraguchi', 'released' => '2024-02-28', 'song_link' => 'https://www.youtube.com/embed/F38EuG2dAyM?si=EXlGtEskHovRN9zB'],
        ]);
    }
}
