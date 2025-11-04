<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tuning extends Model
{
    use HasFactory;

    public function vsynth()
    {
        return $this->belongsTo(VSynth::class);
    }
}
