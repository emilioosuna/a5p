<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasasCambioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     * @return void
     *
     * Tabla maestros de tasas de cambio
     *
     * ejohe-asincon-tecnomastersoft
     *
     */

    protected $tableName = 'tasas_cambio';

    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';

            $table->id()
                  ->comment('ID de la tasa de cambio');

            $table->tinyInteger('tipo')
                  ->comment('Tipo de comparación de la divisa (1) DICOM (2) MONITOR');

            $table->date('factualizacion')
                  ->comment('Fecha de la actualización del valor de la divisa');

            $table->time('hactualizacion')
                  ->comment('Hora de la actualización del valor de la divisa');

            $table->decimal('valor',20,4)
                  ->comment('Monto en bolívares del cambio por divisa (1 USD)');

            $table->boolean('status')->default(false)
                  ->comment('Indica si esta activa o no la tasa');

            $table->softDeletes()
                  ->comment('Indica si el transporte fue borrado o no'); // Para el borrado lógico

             // Índice
            $table->index('factualizacion');
        });

        DB::statement("ALTER TABLE `$this->tableName` COMMENT 'Maestro de tasas de cambio'");

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists($this->tableName);
    }
}
