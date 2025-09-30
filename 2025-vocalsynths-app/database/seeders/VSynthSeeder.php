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
                'image' => 'hatsune-miku.png'
            ],
            [
                'name' => 'Megurine Luka',
                'gender' => 'Female',
                'age' => 20,
                'type' => 'Vocaloid',
                'release_date' => '2009-01-30',
                'image' => 'megurine-luka.png'
            ],
            [
                'name' => 'Kagamine Rin',
                'gender' => 'Female',
                'age' => 14,
                'type' => 'Vocaloid',
                'release_date' => '2007-12-27',
                'image' => 'kagamine-rin.png'
            ],
            [
                'name' => 'Kagamine Len',
                'gender' => 'Male',
                'age' => 14,
                'type' => 'Vocaloid',
                'release_date' => '2007-12-27',
                'image' => 'kagamine-len.png'
            ],
            [
                'name' => 'Kasane Teto',
                'gender' => 'Chimera',
                'age' => 31,
                'type' => 'Synthesiser V',
                'release_date' => '2008-04-01',
                'image' => 'kasane-teto.png'
            ],
        ]);
    }
}
