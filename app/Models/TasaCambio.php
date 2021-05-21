<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; // Borrado lógico

class TasaCambio extends Model
{
    public $timestamps = false;
    protected $table = 'tasas_cambio';
    use SoftDeletes; // Para el borrado lógico

    protected $fillable = [
        'id',
        'tipo',
        'factualizacion',
        'hactualizacion',
        'valor',
        'status'
    ];

    public function epdDicom()
    {
          //relacion de 1 a 1
        return $this->hasOne(ExpedientePrecotizacionDetalle::class);
    }
    public function epdMonitor()
    {
          //relacion de 1 a 1
        return $this->hasOne(ExpedientePrecotizacionDetalle::class);
    }
    public function ecdDicom()
    {
          //relacion de 1 a 1
        return $this->hasOne(ExpedientePrecotizacionDetalle::class);
    }
    public function ecdMonitor()
    {
          //relacion de 1 a 1
        return $this->hasOne(ExpedienteCotizacionDetalle::class);
    }
    public function fdDicom()
    {
          //relacion de 1 a 1
        return $this->hasOne(ExpedientePrecotizacionDetalle::class);
    }
    public function fdMonitor()
    {
          //relacion de 1 a 1
        return $this->hasOne(ExpedientePrecotizacionDetalle::class);
    }

}
