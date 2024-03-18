<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

use Illuminate\Database\Eloquent\Casts\Attribute;

class User extends Authenticatable
{
    /* 
        Mutadores: Permite controlar y transformar el texto ingresado en un input para guardarlo en la base de datos. Transforman el valor antes de almacenarlos.
        Accesores: Transforman el valor después de almacenarlos, pero no lo modifica en la base de datos.
    */
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    // mutador para el campo name de la table users - formatea el texto a minúsculas
    protected function name():Attribute
    {
        return new Attribute(
            get: function($value) {
                return ucwords($value);
            },
            set: function($value) {
                return strtolower($value);
            }
        );
    }
}
