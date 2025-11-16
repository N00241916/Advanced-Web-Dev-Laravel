<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'cover_image', 'artist', 'released', 'audio_file'];

    public function vsynths()
    {
        return $this->belongstoMany(VSynth::class);
    }

}
