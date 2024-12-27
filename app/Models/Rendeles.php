<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rendeles extends Model
{
    /** @use HasFactory<\Database\Factories\RendelesFactory> */
    use HasFactory;
    protected $primaryKey = 'rendeles_azon';

    protected $fillable = [
        'profil',
        'datum',
        'vegosszeg',
        'rendeles_statusz'
    ];

      // Kapcsolat a Profil modellel (N:1 kapcsolat)
      public function profilKapcsolat()
      {
          return $this->belongsTo(User::class, 'profil', 'azon');
      }
  
      // Kapcsolat a RendelesStatusz modellel (N:1 kapcsolat)
      public function statuszKapcsolat()
      {
          return $this->belongsTo(Tipus_szotar::class, 'rendeles_státusz', 'kod');
      }

      //Kapcsolat a Rendeles_tetelek modellel (1:N kapcsolat)
      public function tetelek()
    {
        return $this->hasMany(Rendeles_tetelek::class, 'rendeles_azon', 'rendeles_azon'); //megnézni későbbb
    }
}
