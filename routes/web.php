<?php

use Illuminate\Support\Facades\Route;
use App\Models\Municipio;
use App\Models\Parroquia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    return view('intermedio');
})->name('intermedio');

Route::get('/ppal', function () {
    return view('welcome');
})->name('home');

Route::post('/login', 'Auth\LoginController@login')
    ->name('login');

Route::get('/dashboard', 'DashboardController@index')
    ->name('dashboard');

Route::post('/salir', 'Auth\LoginController@logout')
    ->name('salir');
Route::get('/creditos', function () {
    $data = [
        'alertas' => '',
        'page_title' => 'Créditos del Sistema',
    ];
    return view('creditos')->with($data);
})->name('creditos');

Route::get('/soporte', function () {
    $data = [
        'alertas' => '',
        'page_title' => 'Soporte del Sistema',
    ];
    return view('soporte')->with($data);
})->name('soporte');

Route::get('/musuario', function () {
    $data = [
        'alertas' => '',
        'page_title' => 'Manual del Sistema',
    ];
    return view('manual')->with($data);
})->name('musuario');


Route::middleware(['auth'])->group(function () {
      /*************** Rutas Usuuarios ************/
    Route::get('/usuarios', 'UserController@index')
        ->name('gestion_usuarios')->middleware('permission:gestion_usuarios');

    Route::get('/usuarios/add', 'UserController@add')
        ->name('agregar_usuario')->middleware('permission:agregar_usuario');

    Route::post('/usuarios/add', 'UserController@store')
        ->name('agregaUsuario')->middleware('permission:agregar_usuario');

    Route::get('/usuarios/{id}/editar', 'UserController@edit')
        ->name('editarUsuario')->middleware('permission:editarUsuario');

    Route::get('/usuarios/{id}/pass', 'UserController@editpass')
        ->name('editarPasswordUsuario')->middleware('permission:editarPasswordUsuario');

    Route::get('/usuarios/{id}/niv', 'UserController@editniv')
        ->name('editarNivelUsuario')->middleware('permission:editarNivelUsuario');

    Route::put('/usuarios/{user}', 'UserController@update')->middleware('permission:editarUsuario');

    Route::put('/usuarios/pass/{user}', 'UserController@updatePassword')->middleware('permission:editarPasswordUsuario');

    Route::put('/usuarios/niv/{user}', 'UserController@updateNivel')->middleware('permission:editarNivelUsuario');

    Route::delete('/usuarios/{id}', 'UserController@destroy')
        ->name('borrarUsuario')->middleware('permission:borrarUsuario');
});

//Roles
    Route::post('roles/store', 'RoleController@store')->name('roles.store')
        ->middleware('permission:roles.create');

    Route::get('roles', 'RoleController@index')->name('roles.index')
        ->middleware('permission:roles.index');

    Route::get('roles/create', 'RoleController@create')->name('roles.create')
        ->middleware('permission:roles.create');

    Route::put('roles/{role}', 'RoleController@update')->name('roles.update')
        ->middleware('permission:roles.edit');

    Route::get('roles/{role}', 'RoleController@show')->name('roles.show')
        ->middleware('permission:roles.show');

    Route::delete('roles/{role}', 'RoleController@destroy')->name('roles.destroy')
        ->middleware('permission:roles.destroy');

    Route::get('roles/{role}/edit', 'RoleController@edit')->name('roles.edit')
        ->middleware('permission:roles.edit');


    /*************** Rutas combos dinamicos ************/

    // Busca los municipios del estado seleccionado
    // y carga el combo municipios
    Route::get('/municipios/{estado_id}', function($estado_id){
        return Municipio::where('estado_id',$estado_id)
        ->select('id as value','municipio as text')
        ->orderBy('municipio','ASC')
        ->get();
    });

    // Busca las parroquias del municipio seleccionado
    // y carga el combo parroquias
    Route::get('/parroquias/{municipio_id}', function($municipio_id) {
        return parroquia::where('municipio_id',$municipio_id)
        ->select('id as value','parroquia as text')
        ->orderBy('parroquia','ASC')
        ->get();
    });


/*-------------------------------------------------------------*/
/**
 * RUTA DE CONSULTA VALOR DE DOLAR ( DICOM Y MONITOR)
 * CON UTILIZACION DE JQUERY PARA CONSULTA EN TIEMPO REAL
 * @author Emilio J Osuna H
 *
 * @version 1.0.01-alpha
 *
 **
 */


Route::get('/dicomdolar/', 'ConfiguracionController@dicomdolar')
        ->name('dicomdolar.search');

Route::get('/monitordolar/', 'ConfiguracionController@monitordolar')
        ->name('monitordolar.search');

/*-------------------------------------------------------------*/
// Gestión Dolar //
/**
 * @author Emilio J Osuna H
 *
 * @version 1.0.01-alpha
 *
 **
 */

  Route::resource('GestionDolar', 'TasaCambioController')
        ->names([
                 'index'   => 'GestionDolar.index',
                 'show'    => 'GestionDolar.show',
                 'create'  => 'GestionDolar.create',
                 'store'   => 'GestionDolar.store',
                 'edit'    => 'GestionDolar.edit',
                 'update'  => 'GestionDolar.update',
                 'destroy' => 'GestionDolar.destroy'
              ]);
/*-------------------------------------------------------------*/
