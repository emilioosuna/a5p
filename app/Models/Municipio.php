<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\Cliente;
use App\Models\Chofer;
use App\Models\ClienteRepresentanteLegal;

class Municipio extends Model
{
    public $timestamps = false;
    protected $table = 'municipios';
    protected $fillable = [
        'id_estado',
        'municipio'
    ];

    //relaciones logicas relacion de 1 a m
    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }

    //relaciones logicas relacion de 1 a m
    public function chofer()
    {
        return $this->belongsTo(Chofer::class);
    }

    public function representantelegal()
    {
        return $this->belongsTo(ClienteRepresentanteLegal::class);  // Relacion de 1 a M
    }
}
