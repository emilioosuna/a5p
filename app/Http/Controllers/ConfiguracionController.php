<?php

namespace App\Http\Controllers;

use App\Models\AgenteAduanalDetalle;
use App\Models\Configuracion;
use App\Models\TasaCambio;
use Auth;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ConfiguracionController extends Controller
{

    public function __construct()
    {

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add()
    {
       //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Configuracion  $configuracion
     * @return \Illuminate\Http\Response
     */
    public function show(Configuracion $configuracion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Configuracion  $configuracion
     * @return \Illuminate\Http\Response
     */
    public function edit(Configuracion $configuracione)
    {


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Configuracion  $configuracion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Configuracion $configuracione)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Configuracion  $configuracion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Configuracion $configuracion)
    {
        //
    }

     /**
     *  CONSULTA VALOR DE DOLAR ( DICOM )
     *
     * @param  \App\Models\Configuracion  $configuracion
     * @return \Illuminate\Http\Response
     * @author Emilio J Osuna H
     */
    public function dicomdolar()
    {
        $ch = curl_init('http://www.bcv.org.ve/'); // Inicia sesión cURL
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // Configura cURL para devolver el resultado como cadena
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // Configura cURL para que no verifique el peer del certificado dado que nuestra URL utiliza el protocolo HTTPS
        $info = curl_exec($ch); // Establece una sesión cURL y asigna la información a la variable $info
        curl_close($ch); // Cierra sesión cURL

        $page = strip_tags($info);

        // Dividimos el resultado en arreglos donde encuentre :
        $infor = explode(":", $page);
        $valor = explode(' ', trim($infor[0]));
        $valor2 = preg_replace("/(\r\n|\n|\r|\t)/i", '', $valor);
        $valor3 = array_filter($valor2, "strlen");
        $valort = array_reverse($valor3);
        $valora = str_replace(".", "", $valort[2]);
        $valorb = str_replace(",", ".", $valora);
        $valor = (float)$valorb;
        $tasa = TasaCambio::where('tipo',1)->where('status',1)
                ->first();
        //dd((float)$tasa->valor);
        if (($valor <> (float)$tasa->valor)||((float)$tasa->valor==0.00)) {
            $tasa->status = 0;
            $tasa->update();

            TasaCambio::create([
                'tipo' => 1,
                'factualizacion' => Carbon::now(),
                'hactualizacion' => Carbon::now()->format('H:i:s'),
                'valor' => $valor,
                'status' => 1,
            ]);
        }

        return $valor; // Devuelve la información de la función
    }

     /**
     *  CONSULTA VALOR DE DOLAR ( MONITOR)
     *
     * @param  \App\Models\Configuracion  $configuracion
     * @return \Illuminate\Http\Response
     * @author Emilio J Osuna H
     */
    public function monitordolar()
    {
        // $ch = curl_init('https://monitordolarvenezuela.com/'); // Inicia sesión cURL
        // curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        // curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        // $info = curl_exec($ch);
        // curl_close($ch);
        // $page = strip_tags($info);
        // $infor = explode(":", $page);
        // $valor=explode(' ',trim($infor[740]));
        // $valora=str_replace(".","", $valor[8]);
        // $valorb=str_replace(",",".", $valora);
        // $valort=(float)substr($valorb,3);
        // return  $valort;

        $ch = curl_init('http://www.bcv.org.ve/'); // Inicia sesión cURL
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // Configura cURL para devolver el resultado como cadena
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // Configura cURL para que no verifique el peer del certificado dado que nuestra URL utiliza el protocolo HTTPS
        $info = curl_exec($ch); // Establece una sesión cURL y asigna la información a la variable $info
        curl_close($ch); // Cierra sesión cURL

        $page = strip_tags($info);

        // Dividimos el resultado en arreglos donde encuentre:
        $infor = explode(":", $page);
        $valor = explode(' ',trim($infor[0]));
        $valor2 = preg_replace("/(\r\n|\n|\r|\t)/i", '', $valor);
        $valor3 = array_filter($valor2, "strlen");
        $valort = array_reverse($valor3);
        $valora = str_replace(".", "", $valort[10]);
        $valorb = str_replace(",", ".", $valora);
        $valor = (float)$valorb;
        $tasa = TasaCambio::where('tipo', 2)->where('status', 1)
                ->first();

        if (($valor <> (float)$tasa->valor)||((float)$tasa->valor==0.00)) {
            $tasa->status = 0;
            $tasa->update();

            TasaCambio::create([
                'tipo' => 2,
                'factualizacion' => Carbon::now(),
                'hactualizacion' => Carbon::now()->format('H:i:s'),
                'valor' => $valor,
                'status' => 1,
            ]);
        }

        return $valor;
    }


}
