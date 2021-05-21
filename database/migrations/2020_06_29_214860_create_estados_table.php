<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     *
     * Esta tabla es la tabla de los estados de Venezuela
     *
     * ejoh-asincon-tencomastersof
     */

    protected $tableName = 'estados';

    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';

            $table->id()
                  ->comment('ID del estado (entidad federal)');

            $table->string('estado')
                  ->comment('Nombre / denominación del estado (entidad federal)');
        });

        DB::statement("ALTER TABLE `$this->tableName` COMMENT 'Maestro de estados (entidades federales)'");
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
