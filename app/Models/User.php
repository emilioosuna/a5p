<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes; // Borrado lógico

use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;
    use HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public $timestamps = false;
    use SoftDeletes; // Para el borrado lógico


    protected $fillable = [
            'id',
            'cedula',
            'nombres',
            'apellidos',
            'correo',
            'password',
            'usuario',
            'activo'
        ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getNombresApellidosAttribute($value)
    {
        return ucfirst($this->nombres) . " " . ucfirst($this->apellidos);
    }
}
