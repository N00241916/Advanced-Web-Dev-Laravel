<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Models\VSynth;
use App\Models\Song;

class VSynthSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $currentTimestamp = Carbon::now();

    $vsynth = VSynth::create([
                'name' => 'Hatsune Miku',
                'gender' => 'Female',
                'age' => 16,
                'type' => 'Vocaloid',
                'release_date' => '2007-08-31',
                'image' => 'hatsune-miku.png',
                'demolink' => 'https://www.youtube.com/embed/wIMhsHlTLso?si=HHFuIk52CRL_JZp4'
    ]);
    $song = Song::create( ['title' => 'God-ish', 'cover_image' => 'godish.png', 'artist' => 'PinocchioP', 'released' => '2021-09-17', 'song_link' => 'https://www.youtube.com/embed/EHBFKhLUVig?si=1-9R82NsIbgHIS_Z']);
    $song2 = Song::create( ['title' => 'Rolling Girl', 'cover_image' => 'rolling_girl.png', 'artist' => 'wowoka', 'released' => '2010-02-14', 'song_link' => 'https://www.youtube.com/embed/vnw8zURAxkU?si=hIKPjB7be47Y9-K0']);

    $vsynth->songs()->attach([$song, $song2]);

    $vsynth = VSynth::create([
                'name' => 'Megurine Luka',
                'gender' => 'Female',
                'age' => 20,
                'type' => 'Vocaloid',
                'release_date' => '2009-01-30',
                'image' => 'megurine-luka.png',
                'demolink' => 'https://www.youtube.com/embed/IXciDycxyh8?si=vEatGDztgjd37FyS'
    ]);
    $song = Song::create(['title' => 'Luka Luka ★ Night Fever', 'cover_image' => 'night_fever.png', 'artist' => 'samfree', 'released' => '2009-02-12', 'song_link' => 'https://embed.nicovideo.jp/watch/sm6119955/script?w=320&h=180']);
    $vsynth->songs()->attach([$song]);

    $vsynth = VSynth::create([
                'name' => 'Kagamine Rin',
                'gender' => 'Female',
                'age' => 14,
                'type' => 'Vocaloid',
                'release_date' => '2007-12-27',
                'image' => 'kagamine-rin.png',
                'demolink' => 'https://www.youtube.com/embed/Llx5qIxyGvg?si=rdo9fN0YZZDHdtQf'
    ]);
    $song = Song::create(['title' => 'Meltdown', 'cover_image' => 'meltdown.png', 'artist' => 'iroha(sasaki)', 'released' => '2008-12-19', 'song_link' => 'https://www.youtube.com/embed/dSw8CucthGc?si=q3JVBZZFfIgWLwaE']);
    $song2 = Song::create(['title' => 'Young Girl A', 'cover_image' => 'young_girl.png', 'artist' => 'Siinamota', 'released' => '2013-10-13', 'song_link' => 'https://www.youtube.com/embed/AqI97zHMoQw?si=X_IDtFjBLBbCqIz6']);
    $vsynth->songs()->attach([$song, $song2]);

    $vsynth = VSynth::create([
                'name' => 'Kagamine Len',
                'gender' => 'Male',
                'age' => 14,
                'type' => 'Vocaloid',
                'release_date' => '2007-12-27',
                'image' => 'kagamine-len.png',
                'demolink' => 'https://www.youtube.com/embed/Llx5qIxyGvg?si=rdo9fN0YZZDHdtQf'
    ]);

    $vsynth = VSynth::create([
                'name' => 'Kasane Teto',
                'gender' => 'Chimera',
                'age' => 31,
                'type' => 'Synthesiser V',
                'release_date' => '2008-04-01',
                'image' => 'kasane-teto.png',
                'demolink' => 'https://www.youtube.com/embed/ibdPe02EsY8?si=FMjWTWhE1i22DHfB'
    ]);
    $song = Song::create(['title' => 'Birdbrain', 'cover_image' => 'birdbrain.png', 'artist' => 'Jamie Paige', 'released' => '2025-06-28', 'song_link' => 'https://www.youtube.com/embed/0iVlSNpq8i8?si=NMKnwGAX9mpmlp-A']);
    $song2 = Song::create(['title' => 'Medicine', 'cover_image' => 'medicine.png', 'artist' => 'Sasuke Haraguchi', 'released' => '2024-02-28', 'song_link' => 'https://www.youtube.com/embed/F38EuG2dAyM?si=EXlGtEskHovRN9zB']);
    $vsynth->songs()->attach([$song, $song2]);

    $vsynth = VSynth::create([
                'name' => 'Meiko',
                'gender' => 'Female',
                'age' => 0,
                'type' => 'Vocaloid',
                'release_date' => '2004-11-05',
                'image' => 'meiko.png',
                'demolink' => 'https://www.youtube.com/embed/A8LQjiaJwes?si=3blm2-xlXxJdf_d0'
    ]);
    $song = Song::create(['title' => 'Change me', 'cover_image' => 'change_me.png', 'artist' => 'shu-t', 'released' => '2009-11-05', 'song_link' => 'https://www.youtube.com/embed/Y_DzUshhdBQ?si=ldac0Pl-FXLhO-nP']);
    $vsynth->songs()->attach([$song]);

    $vsynth = VSynth::create([
                'name' => 'Gumi',
                'gender' => 'Female',
                'age' => 0,
                'type' => 'Vocaloid',
                'release_date' => '2009-06-26',
                'image' => 'gumi.png',
                'demolink' => 'https://www.youtube.com/embed/2_4M9Po-DjI?si=ZNk37xaY_o_bt2jo'
    ]);
    $song = Song::create(['title' => 'Envy Baby', 'cover_image' => 'envy_baby.png', 'artist' => 'Kanaria', 'released' => '2021-02-13', 'song_link' => 'https://www.youtube.com/embed/dgS6HvEohsw?si=Y9-dlGM_v-mxZBul']);
    $vsynth->songs()->attach([$song]);

    $vsynth = VSynth::create([
                'name' => 'Kaai Yuki',
                'gender' => 'Female',
                'age' => 9,
                'type' => 'Vocaloid',
                'release_date' => '2009-12-04',
                'image' => 'kaai-yuki.png',
                'demolink' => 'https://www.youtube.com/embed/No1t60RVCJ4?si=6AnGxBfR9X0lLbMI'
    ]);
    $song = Song::create(['title' => 'Lagtrain', 'cover_image' => 'lagtrain.png', 'artist' => 'INABAKUMORI', 'released' => '2020-07-16', 'song_link' => 'https://www.youtube.com/embed/UnIhRpIT7nc?si=q73Rmbk9PixhL5a1']);
    $vsynth->songs()->attach([$song]);
        
    }
}
