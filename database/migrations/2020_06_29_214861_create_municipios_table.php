<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMunicipiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     *
     * Esta tabla es la tabla de los Municipios por cada estado de venezuela
     *
     * ejoh-asincon-tencomastersof
     */

    protected $tableName = 'municipios';

    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';

            $table->id()
            ->comment('ID del municipio');

            $table->foreignId('estado_id')
            ->comment('ID del estado (entidad federal) a la que pertenece el municipio');

            $table->string('municipio')
            ->comment('Nombre / denominación del municipio');

            // Índices
            $table->index('estado_id');
            $table->index('municipio');
        });

        DB::statement("ALTER TABLE `$this->tableName` COMMENT 'Maestro de municipios'");
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
