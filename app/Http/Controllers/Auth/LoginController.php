<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Auth;
use App\Models\User;
use Artisan;
use App\Models\TasaCambio;

class LoginController extends Controller
{
    public function login()
    {
        $credentials = $this->validate(request(),[
            'usuario'=>'required|string',
            'password'=>'required|string',
        ],[
            'usuario.required'=>'Usuario Requerido',
            'password.required'=>'Clave Requerida',
        ]);
        if (Auth::attempt([
            'usuario' => $credentials['usuario'],
            'password'=>$credentials['password']
        ])) {
        $usuarioactivo = User::where('users.id','=', auth()->user()->id)->first();

        // dd(auth(),'aca');

            if ($usuarioactivo->usuario!='admin'){
                if ($usuarioactivo->activo===1) {
                    auth()->logout();
                    // $usuarioactivo->update([
                    //     'activo' => '0',
                    // ]);
                    return back()->withErrors(
                        ['usuario'=> trans('Usuario ya tiene una sesión activa....')]
                    );
                }else{
                    $usuarioactivo->update([
                        'activo' => '1'
                    ]);
                }

            }

            // El usuario fue autenticado exitosamente...
            return redirect()
                ->route('dashboard');
        }

        return back()->withErrors(
            ['usuario'=> trans('Credenciales no encontradas en nuestros registros')]
        );
    }

    public function logout()
    {
        Artisan::call('cache:forget spatie.permission.cache');
        Artisan::Call('cache:clear');
        $user = User::where('users.id','=',auth()->user()->id)->first();
        $user->update([
            'activo' => '0',
        ]);
        Artisan::call('cache:forget spatie.permission.cache');
        Artisan::Call('cache:clear');
        Artisan::Call('optimize:clear');
        Artisan::Call('config:clear');
        Artisan::Call('view:clear');
        session_unset();
        Session::flush();
        session()->flash('message', '¡Gracias por usar nuestro sistema!');
        return redirect('/');
    }
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}

