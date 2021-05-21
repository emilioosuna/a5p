<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Estado;
use App\Models\Municipio;
use App\Models\Parroquia;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\DB;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $tables = [
            'users',
            'estados',
            'municipios',
            'parroquias',
            'permissions',
        ];

        $this->truncateTables($tables);
        $this->call(SeederUser::class);
        $this->call(SeederEstados::class);
        $this->call(SeederMunicipios::class);
        $this->call(SeederParroquias::class);
        $this->call(SeederPermissionsTable::class);
    }

    protected function truncateTables(Array $tables) {
        // Desactiva el chequeo de las claves foráneas en la base de datos.
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');

        foreach($tables as $table) {
            // Elimina todos los datos de cada tabla...
            DB::table($table)->truncate();
        }

        // Reactiva el chequeo de las claves foráneas en la base de datos.
        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');
    }
}
