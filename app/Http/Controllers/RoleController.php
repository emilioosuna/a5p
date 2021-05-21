<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'roles' => Role::all(),
            'page_title' => 'Roles y Permisos',
            'alertas' => ''
        ];

        return view('roles.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $permissions = Permission::get();

         $data = [
            'page_title' => 'Roles y Permisos',
            'alertas' => '',
            'permissions'=> $permissions
        ];

        return view('roles.create')->with($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);
        $request->validate([
            'name'=>'required',
        ],[
            'name.required'=>'Es necesario dar un nombre al rol creado',
        ]);
        if((!$request->permissions)||(count($request->permissions)==0)){
            Session::flash('danger', 'Debe indicar al menos un permiso para porder crear un rol');
            return redirect()->back();
        }
        $role =Role::create([
            'name' => $request->name,
        ]);

        $permisos=$request->permissions;
        //dd($permisos);
        foreach ($permisos as $permis) {
             $pemriso=Permission::where('id',$permis)->first();
             $role->givePermissionTo($pemriso->name);
        }

        Session::flash('flash_rmessage', 'Role Creado con Exito');
        return redirect()->route('roles.index')
            ->with('info', 'Rol guardado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

         $data = [
            'role' => Role::find($id),
            'page_title' => 'Roles y Permisos',
            'alertas' => Expediente::fillAlerts()
        ];

        return view('roles.show')->with($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $role = Role::find($id);
        $page_title = 'Roles y Permisos';
        $permissions = Permission::get();

         $data = [
            'role' => $role,
            'page_title' => 'Roles y Permisos',
            'alertas' => '',
            'permissions'=> $permissions
        ];

        return view('roles.edit')->with($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $role = Role::find($id);
        // $role->update($request->all());
        // $role->permissions()->sync($request->get('permissions'));
        $permisos=$request->permissions;
        //dd($role);
        foreach ($permisos as $permis) {
             $pemriso=Permission::where('id',$permis)->first();
             $role->givePermissionTo($pemriso->name);
        }
        //dd($role,$request->get('permissions'));
         Session::flash('flash_rmessage', 'Role Actualizado con Exito');
        return redirect()->route('roles.index')
            ->with('info', 'Rol guardado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $role = Role::find($id)->delete();
        Session::flash('flash_rmessage', 'Role Eliminado con Exito');
        return back()->with('info', 'Eliminado correctamente');
    }
}
