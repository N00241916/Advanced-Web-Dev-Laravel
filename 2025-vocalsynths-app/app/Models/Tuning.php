<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tuning extends Model
{
    use HasFactory;

    protected $fillable = [
        'v_synth_id',
        'name',
        'artist',
        'image',
        'created_at',
        'updated_at',
    ];

    public function vsynth()
    {
        return $this->belongsTo(VSynth::class);
    }
}
