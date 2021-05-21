<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;
use Artisan;
class SeederPermissionsTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         Artisan::call('cache:forget spatie.permission.cache');
         Artisan::Call('cache:clear');
         DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
         DB::table('permissions')->truncate();
         DB::table('roles')->truncate();
         DB::table('role_has_permissions')->truncate();
         DB::statement('SET FOREIGN_KEY_CHECKS = 1;');
         Artisan::call('cache:forget spatie.permission.cache');
         Artisan::Call('cache:clear');

        //Permission list
        Permission::create([
                'name' => 'gestion_usuarios',
        ]);
        Permission::create([
                'name' => 'agregar_usuario',
        ]);
        Permission::create([
                'name' => 'editarUsuario',
        ]);
        Permission::create([
                'name' => 'editarPasswordUsuario',
        ]);
        Permission::create([
                'name' => 'editarNivelUsuario',
        ]);
        Permission::create([
                'name' => 'borrarUsuario',
        ]);
        Permission::create([
                'name' => 'roles.index',
        ]);
        Permission::create([
                'name' => 'roles.create',
        ]);
        Permission::create([
                'name' => 'roles.store',
        ]);
        Permission::create([
                'name' => 'roles.update',
        ]);
        Permission::create([
                'name' => 'roles.show',
        ]);
        Permission::create([
                'name' => 'roles.destroy',
        ]);
        Permission::create([
                'name' => 'roles.edit',
        ]);

        $permisions = [
            ['name' => 'GestionDolar.index'],
            ['name' => 'GestionDolar.show'],
            ['name' => 'GestionDolar.create'],
            ['name' => 'GestionDolar.store'],
            ['name' => 'GestionDolar.edit'],
            ['name' => 'GestionDolar.update'],
            ['name' => 'GestionDolar.destroy'],
        ];

        foreach($permisions as $permision) {
            Permission::create([
                'name' => $permision['name'],
            ]);
        }

        // Admin
        $root = Role::create([
            'name' => 'AdministradorMaster',
            // 'guard_name' => 'Administrador'
        ]);



        // $admin->givePermissionTo('gestion_usuarios');

        $permisos=Permission::all();
        foreach ($permisos as $permiso) {
             $root->givePermissionTo($permiso->name);
        }


        // User Admin
        $user = User::where('id',1)->first();
        $user->assignRole('AdministradorMaster');
    }

}
