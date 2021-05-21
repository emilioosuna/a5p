<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\Chofer;
use App\Models\Cliente;
use App\Models\ClienteRepresentanteLegal;

class Parroquia extends Model
{
    public $timestamps = false;
    protected $table = 'parroquias';

    protected $fillable = [
        'id_municipio',
        'parroquia'
    ];

    //relaciones logicas relacion de 1 a m
    public function chofer()
    {
        return $this->hasMany(Chofer::class);
    }

    //relaciones logicas relacion de 1 a m
    public function cliente()
    {
        return $this->hasMany(Cliente::class);
    }

    public function representantelegal()
    {
        return $this->hasMany(ClienteRepresentanteLegal::class);  // Relacion de 1 a M
    }

}
