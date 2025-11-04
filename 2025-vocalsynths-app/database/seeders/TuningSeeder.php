<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Models\Tuning;

class TuningSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $currentTimestamp = Carbon::now();

        Tuning::insert([
            [
                'v_synth_id' => 1,
                'name' => "Deco*27's Miku",
                'artist' => 'Deco*27',
                'image' => 'deco_miku.png',
            ],
        ]);
    }
}
