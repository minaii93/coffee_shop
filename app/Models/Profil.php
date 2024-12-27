<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    protected $primaryKey = 'azon';
    protected $fillable = [
        'email',
        'password',
        'nev', 
        'feliratkozott_e', 
        'profil_tipus'

    ];

    public function rendelesek()
    {
        return $this->hasMany(Rendeles::class, 'profil', 'azon');
    }

    public function profilKapcsolat()
    {
        return $this->belongsTo(Tipus_szotar::class, 'profil_tipus', 'kod');
    }


    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}
