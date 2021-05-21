<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParroquiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     *
     *
     *  Esta Tabla es de las parroquias por cada municipio y estado de venezuela
     *
     * ejoh-asincon-tencomastersof
     */

    protected $tableName = 'parroquias';

    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';

            $table->id()
                  ->comment('ID de la parroquia');
            $table->unsignedBigInteger('municipio_id')
                  ->comment('ID del municipio al que pertenece la parroquia');
            $table->string('parroquia')
                  ->comment('Nombre / denominación de la parroquia');

            // Índices
            $table->index('municipio_id');
            $table->index('parroquia');
        });

        DB::statement("ALTER TABLE `$this->tableName` COMMENT 'Maestro de parroquias'");

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
