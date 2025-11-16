<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Models\VSynth;

class VSynthSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $currentTimestamp = Carbon::now();

        VSynth::insert([
            [
                'name' => 'Hatsune Miku',
                'gender' => 'Female',
                'age' => 16,
                'type' => 'Vocaloid',
                'release_date' => '2007-08-31',
                'image' => 'hatsune-miku.png',
                'demolink' => 'https://www.youtube.com/embed/wIMhsHlTLso?si=HHFuIk52CRL_JZp4'
            ],
            [
                'name' => 'Megurine Luka',
                'gender' => 'Female',
                'age' => 20,
                'type' => 'Vocaloid',
                'release_date' => '2009-01-30',
                'image' => 'megurine-luka.png',
                'demolink' => 'https://www.youtube.com/embed/IXciDycxyh8?si=vEatGDztgjd37FyS'
            ],
            [
                'name' => 'Kagamine Rin',
                'gender' => 'Female',
                'age' => 14,
                'type' => 'Vocaloid',
                'release_date' => '2007-12-27',
                'image' => 'kagamine-rin.png',
                'demolink' => 'https://www.youtube.com/embed/Llx5qIxyGvg?si=rdo9fN0YZZDHdtQf'
            ],
            [
                'name' => 'Kagamine Len',
                'gender' => 'Male',
                'age' => 14,
                'type' => 'Vocaloid',
                'release_date' => '2007-12-27',
                'image' => 'kagamine-len.png',
                'demolink' => 'https://www.youtube.com/embed/Llx5qIxyGvg?si=rdo9fN0YZZDHdtQf'
            ],
            [
                'name' => 'Kasane Teto',
                'gender' => 'Chimera',
                'age' => 31,
                'type' => 'Synthesiser V',
                'release_date' => '2008-04-01',
                'image' => 'kasane-teto.png',
                'demolink' => 'https://www.youtube.com/embed/ibdPe02EsY8?si=FMjWTWhE1i22DHfB'
            ],
            [
                'name' => 'Meiko',
                'gender' => 'Female',
                'age' => 0,
                'type' => 'Vocaloid',
                'release_date' => '2004-11-05',
                'image' => 'meiko.png',
                'demolink' => 'https://www.youtube.com/embed/A8LQjiaJwes?si=3blm2-xlXxJdf_d0'
            ],
            [
                'name' => 'Gumi',
                'gender' => 'Female',
                'age' => 0,
                'type' => 'Vocaloid',
                'release_date' => '2009-06-26',
                'image' => 'gumi.png',
                'demolink' => 'https://www.youtube.com/embed/2_4M9Po-DjI?si=ZNk37xaY_o_bt2jo'
            ],
        ]);
    }
}
