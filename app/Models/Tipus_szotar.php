<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipus_szotar extends Model
{
    /** @use HasFactory<\Database\Factories\TipusSzotarFactory> */
    use HasFactory;

    protected $primaryKey = 'azon';

    protected $fillable = [
        'azon',
        'leiro',
        'tartozik'
    ];


    public function statuszKapcsolat()
      {
          return $this->hasMany(Rendeles::class, 'rendeles_státusz', 'kod'); //atírni 
      }
}
