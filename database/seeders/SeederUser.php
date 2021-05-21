<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;
class SeederUser extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');

        $usuario = [
            'cedula' => ('V-956720'),
            'nombres' =>('User'),
            'apellidos' => ('Root'),
            'correo' => ('asinconve@gmail.com'),
            'password' => bcrypt('admin123456'),
            'usuario' => ('admin'),
            'activo' => ('0'),
        ];

        User::insert($usuario);

        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');
    }
}
