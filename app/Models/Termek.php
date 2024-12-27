<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Termek extends Model
{
    
    use HasFactory;

    protected $primaryKey = 'termek_id';

    protected $fillable = [
        'elnevezes',
        'jelleg',
        'tipus',
        'elerhetoE',
        'akt_ar',
        'egyseg_ml',
    ];
}
