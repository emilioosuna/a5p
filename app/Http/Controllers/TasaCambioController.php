<?php

namespace App\Http\Controllers;

use App\Models\TasaCambio;

use App\Http\Requests\TasaCambioFormRequest;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class TasaCambioController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:GestionDolar.index')->only(['index']);
        $this->middleware('permission:GestionDolar.show')->only(['show']);
        $this->middleware('permission:GestionDolar.create')->only(['create']);
        $this->middleware('permission:GestionDolar.store')->only(['store']);
        $this->middleware('permission:GestionDolar.edit')->only(['edit']);
        $this->middleware('permission:GestionDolar.update')->only(['update']);
        $this->middleware('permission:GestionDolar.destroy')->only(['destroy']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $sql="SELECT id,factualizacion,hactualizacion,valor, case WHEN tipo=1 THEN 'BCV $' WHEN tipo=2 THEN 'BCV E' END AS tnombre, case WHEN status=0 THEN 'No Activo' WHEN status=1 THEN 'Activo' END AS nstatus FROM `tasas_cambio` WHERE status=1";
       $tasacambios = DB::select(DB::raw($sql));
       $page_title = 'Gestión Tasa de Cambio';
       $data = [
            'tasacambios'   => $tasacambios,
            'page_title' => $page_title,
            'alertas' => ''
       ];

        return view('gestion_dolar.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       // dd(Carbon::now()->format('d/m/Y G:i:s'));
       //
       $data = [
            'fechaactualizacion'   => Carbon::now()->format('d/m/Y'),
            'page_title' => 'Actualiza Tasa Cambio',
            'alertas' => ''
       ];
       return view('gestion_dolar.create')->with($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TasaCambioFormRequest $request)
    {
        // Valida que la solicitud sea una matriz
        if (!is_array($request->all())) {
            return ['error' => 'La solicitud no es una matriz'];
        }
        // Capturo los datos del formulario
        $data = request();
        // $fecha = new Carbon($data['factu'])->format('Y-m-d');
        $fecha=implode('-',array_reverse(explode('/',$data['factu'])));
        $hora = Carbon::now();
        //dd($hora->format('H:i:s'));
        //
        try {

            //actualizo todas las anteriores a segun su tipo a no activa
            //para activar que quede activa la nueva

            $tipodivisa=$data['stipod'];
            $sql="UPDATE tasas_cambio SET status = 0 WHERE status=1 AND tipo='$tipodivisa'";
            DB::connection('mysql')->getPdo()->exec(DB::raw($sql));

            // Guarda los datos por el POST

            TasaCambio::create([
                'tipo'                    => $data['stipod'],
                'factualizacion'          => $fecha,
                'hactualizacion'          => $hora->format('H:i:s'),
                'valor'                   => $data['valord'],
                'status'                  => $data['statusd'],
            ]);

            return redirect()->route('GestionDolar.index')
                  ->with([Session::flash('mms', 'actualizacion de divisa con éxito')]);

        } catch (Exception $e) {
            Log::info('Error al realizar actualizcion de divisa: '.$e);
            return \Response::json(['Error al realizar actualizcion de divisa' => false], 500);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TasaCambio  $tasaCambio
     * @return \Illuminate\Http\Response
     */
    public function show(TasaCambio $GestionDolar)
    {
       $sql="SELECT id,factualizacion,hactualizacion,valor, case WHEN tipo=1 THEN 'BCV $' WHEN tipo=2 THEN 'BCV E' END AS tnombre, case WHEN status=0 THEN 'No Activo' WHEN status=1 THEN 'Activo' END AS nstatus FROM `tasas_cambio` WHERE tipo='$GestionDolar->tipo' ORDER BY status DESC";
       $tasacambios = DB::select(DB::raw($sql));
       $page_title = 'Gestión Tasa de Cambio';
       $data = [
            'tasacambios'   => $tasacambios,
            'page_title' => $page_title,
            'alertas' => ''       ];
        return view('gestion_dolar.show')->with($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TasaCambio  $tasaCambio
     * @return \Illuminate\Http\Response
     */
    public function edit(TasaCambio $tasaCambio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TasaCambio  $tasaCambio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TasaCambio $tasaCambio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TasaCambio  $tasaCambio
     * @return \Illuminate\Http\Response
     */
    public function destroy(TasaCambio $GestionDolar)
    {
        // dd($GestionDolar->id);
        $sql="UPDATE tasas_cambio SET status = 0 WHERE status=1 AND id='$GestionDolar->id'";
            DB::connection('mysql')->getPdo()->exec(DB::raw($sql));
        $GestionDolar->delete();
        return redirect()->route('GestionDolar.index')
                 ->with([Session::flash('mms', 'Eliminado con éxito')]);
    }
}
