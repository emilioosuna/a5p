<?php

namespace App\Http\Controllers;

use App\Models\Municipio;
use App\Models\Parroquia;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Artisan;

class UserController extends Controller
{
    public function index()
    {
        $roluser=auth()->user()->roles()->first()->id;
        if($roluser==1){
            $users=User::all();
        }else{
             $users=User::where('id','>',1)->get();
        }
        $data = [
            'users' => $users,
            'page_title' => 'Gestión de Usuarios',
            'alertas' => ''
        ];

        return view('usuarios.gestion')->with($data);
    }

    public function add()
    {
        $roluser=auth()->user()->roles()->first()->id;
        if($roluser==1){
            $users=User::all();
        }else{
             $users=User::where('id','>',1)->get();
        }
        $data = [
            'usuarios' => $users,
            'roles' => Role::where('id','>',1)->get(),
            'page_title' => 'Crear Usuarios',
            'alertas' => ''
        ];

        return view('usuarios.add')->with($data);
    }

    public function store()
    {
        $data = request();
        $ced = $data['nac'].'-'.$data['cedrif'];
        $usuario = $data['usuario'];
        $usua = DB::table('users')
                  ->where('users.cedula','=',$ced)
                  ->count();

        if ( $usua == 1) {
            $roles = Role::all();
            Session::flash('flash_umessage', 'Usuario YA registrado. Intente de nuevo');
            return view('usuarios.add',compact('roles'));
        }

        $usua2 = DB::table('users')
                   ->where('users.usuario','=',$usuario)
                   ->count();

        if ($usua2 == 1) {
            $roles = Role::all();
            Session::flash('flash_umessage', 'Usuario YA registrado con ese usuario intente de nuevo');
            return view('usuarios.add',compact('roles'));
        }

        $data->validate([
            'nac' => 'required',
            'cedrif' => 'required',
            'nomraz' => 'required',
            'apellidos' => '',
            'mail' => 'required | email | unique:users,correo',
            'pass' => 'required',
            'usuario' => 'required | unique:users,usuario',
            'nivel' => 'required',
        ],[
            'nac.required' => 'El Identificador de nacionalidad o tipo de RIF es requerido',
            'cedrif.required' => 'Número de identificación requerido',
            'nomraz.required' => 'Nombre o Razón Social requerido',
            'mail.required' => 'Correo requerido',
            'mail.email' => 'Correo debe ser formato valido',
            'mail.unique' => 'Correo ya utilizado',
            'pass.required' => 'Clave requerida',
            'usuario.required' => 'Usuario requerido',
            'usuario.unique' => 'Usuario ya utilizado',
            'nivel.required' => 'Nivel requerido',
        ]);

        User::create([
            'cedula' => $data['nac'].'-'.$data['cedrif'],
            'nombres' => $data['nomraz'],
            'apellidos' => $data['apellidos'],
            'correo' => $data['mail'],
            'password' => bcrypt($data['pass']),
            'usuario' => $data['usuario'],
            'nivel' => $data['nivel'],
            'activo' => '0',
        ]);

        $ultimousuarioid = User::max('id');
        $user = User::where('id',$ultimousuarioid)->first();
        $user->assignRole($data['nivel']);

        Session::flash('flash_umessage', 'Usuario registrado con éxito');

        return redirect()->route('gestion_usuarios');
    }

    public function edit(User $id)
    {
        $usuarios = User::all();
        $roluser=auth()->user()->roles()->first()->id;
        if($roluser==1){
            $users=User::all();
        }else{
             $users=User::where('id','>',1)->get();
        }


        $data = [
            'id' => $id,
            'roles' => Role::orderBy('name','ASC')->get(),
            'nivel' => $roluser,
            'page_title' => 'Editar Usuarios',
            'alertas' => ''
        ];

        return view('usuarios.edit')->with($data);
    }

    public function editpass(User $id)
    {
         $usuarios = User::all();
        $roluser=auth()->user()->roles()->first()->id;
        if($roluser==1){
            $users=User::all();
        }else{
             $users=User::where('id','>',1)->get();
        }

        if ($roluser == 1) {
            $roles = Role::orderBy('name', 'ASC')->where('roles.id', '>=', 1)->get();
        }

        if ($roluser >= 2) {
            $roles = Role::orderBy('name', 'ASC')->where('roles.id', '>=', 2)->get();
        }

        // if (auth()->user()->nivel == 3) {
        //     $roles = Role::orderBy('name', 'ASC')->where('roles.id', '>=', 3)->get();
        // }

        $data = [
            'id' => $id,
            'roles' => Role::orderBy('id','ASC')->get(),
            'nivel' => $roluser,
            'page_title' => 'Editar Usuarios',
            'alertas' => ''
        ];

        return view('usuarios.epassword')->with($data);
    }

    public function editniv(User $id)
    {
        $usuarios = User::all();
        $roluser=auth()->user()->roles()->first()->id;
        if($roluser==1){
            $users=User::all();
        }else{
             $users=User::where('id','>',1)->get();
        }

        if ($roluser == 1) {
            $roles = Role::orderBy('name', 'ASC')->where('roles.id', '>=', 1)->get();
        }

        if ($roluser >= 2) {
            $roles = Role::orderBy('name', 'ASC')->where('roles.id', '>=', 2)->get();
        }

        // if (auth()->user()->nivel == 3) {
        //     $roles= Role::orderBy('name', 'ASC')->where('roles.id', '==', 4)->get();
        // }

        $data = [
            'id' => $id,
            'page_title' => 'Editar Usuarios',
            'roles' => Role::orderBy('name', 'ASC')->get(),
            'nivel' => $roluser,
            'alertas' => ''
        ];

        return view('usuarios.enivel')->with($data);
    }

    public function update(User $user)
    {
        $data = request()->validate([
            'nac' => '',
            'cedrif' => 'required',
            'nomraz' => 'required',
            'apellidos' => '',
            'mail' => 'required',
            'usuario' => 'required',
        ]);

        $user->update([
            'cedula' => $data['nac'].'-'.$data['cedrif'],
            'nombres' => $data['nomraz'],
            'apellidos' => $data['apellidos'],
            'correo' => $data['mail'],
            'usuario' => $data['usuario'],
        ]);

        //$user->assignRole($data['nivel']);

        Session::flash('flash_message', 'Usuario actualizado con éxito');

        return redirect()->route('gestion_usuarios');
    }

    public function updatePassword(User $user)
    {
        $data = request()->validate([
            'pass' => 'required',
        ]);

        $user->update([
           'password' =>bcrypt($data['pass'])
        ]);
         Session::flash('flash_message', 'Usuario actualizado con éxito');
        return redirect()->route('gestion_usuarios');
    }

    public function updateNivel(User $user)
    {
        $data = request()->validate([
            'nivel' => 'required',
        ]);

        $user->assignRole($data['nivel']);

         Artisan::call('cache:forget spatie.permission.cache');
         Artisan::Call('optimize:clear');

         Session::flash('flash_message', 'Usuario actualizado con éxito');
         return redirect()->route('gestion_usuarios');


    }

    public function destroy(User $id)
    {

            $id->delete();

        Session::flash('flash_umessage', 'Usuario Eliminado con éxito');

        return redirect()->route('gestion_usuarios');
    }
}
