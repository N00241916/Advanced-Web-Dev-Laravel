<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VSynth extends Model
{
    use HasFactory;

    protected $fillable = [ //allows the parameters to be filled by the form
        'name',
        'age',
        'gender',
        'type',
        'release_date',
        'image',
        'demolink',
        'created_at',
        'updated_at',
    ];

    public function tunings() 
    {
        return $this->hasMany(Tuning::class);
    }
}
