<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\Cliente;
use App\Models\Chofer;
use App\Models\ClienteRepresentanteLegal;

class Estado extends Model
{
    public $timestamps = false;
    protected $table = 'estados';

    protected $fillable = [
        'estado'
    ];

    //relaciones logicas relacion de 1 a m
    public function cliente()
    {
        return $this->hasMany(Cliente::class);
    }

    //relaciones logicas relacion de 1 a m
    public function chofer()
    {
        return $this->hasMany(Chofer::class);
    }

    public function representantelegal()
    {
        return $this->hasMany(ClienteRepresentanteLegal::class);  // Relacion de 1 a M
    }
}
