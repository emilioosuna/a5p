<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     *
     * Esta tabla es la tabla de usuarios del sistema
     *
     * ejoh-asincon-tencomastersof
     *
     */
    protected $tableName = 'users';

    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';

            $table->id()
            ->comment('ID del usuario');

            $table->char('cedula',12)
            ->comment('Cédula del usuario en formato "V99999999"');

            $table->string('nombres',128)
            ->comment('Nombres completos del usuario');

            $table->string('apellidos',128)
            ->comment('Apellidos completos del usuario');

            $table->string('correo',128)
            ->comment('Correo electrónico del usuario');

            $table->char('password',64)
            ->comment('Clave del usuario');

            $table->char('usuario',15)
            ->comment('Nombre de usuario (Username) del sistema');

            $table->boolean('activo')->default(0)
            ->comment('Indica si el usuario tiene o no una sesión activa');

            // Este pudiese sustituir a activo.
            //$table->rememberToken();
            /*
                "Borrados Suaves / Soft Deletes"
                Significa que los registros ni siquiera se marcarán para ser
                borrados sino que serán señalados como si estuvieran eliminados
                físicamente
            */
            $table->softDeletes()
            ->comment('si el usuario fue borrado de la BD');;

            // Índices
            $table->unique('cedula');
            $table->unique('usuario');
            $table->unique('correo');
        });

        DB::statement("ALTER TABLE `$this->tableName` COMMENT 'Registro de usuarios'");

    }

    /*
        !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
        AVERIGUAR TODO SOBRE ACCESSORS Y MUTATORS

        COÑO EMILIO RTFM!!!! xD
        !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
     */

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
