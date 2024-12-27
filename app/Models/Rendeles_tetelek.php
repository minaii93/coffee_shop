<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rendeles_tetelek extends Model
{
    /** @use HasFactory<\Database\Factories\RendelesTetelekFactory> */
    use HasFactory;

    protected $primaryKey = 'pohar_id';

    protected $fillable = [
        'rendeles_azon',
        'tetel_osszeg',
    ];

    // Alapértelmezett értékek
    protected $attributes = [
        'tetel_osszeg' => 0.00,
    ];

    // Kapcsolat a Rendelés modellel
    public function rendeles()
    {
        return $this->belongsTo(Rendeles::class, 'rendeles_azon', 'rendeles_azon');
    }
}
