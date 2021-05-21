<?php

$nac='V';
 $ced=14916970;

// Ruta a la cual nos vamos a conectar con un website del CNE
$url="http://www.cne.gov.ve/web/registro_electoral/ce.php?nacionalidad=$nac&cedula=$ced";
// Compruebo si existe el modulo de curl
if(!in_array('curl', get_loaded_extensions())) {
    die('Disculpe, es necesario la instalaci&oacute; del modulo de curl para su funcionamiento, debe ejecutar el siguiente comando: <br/>   apt-get install php5-curl');
}
$ch = curl_init();
curl_setopt ($ch, CURLOPT_URL, $url);
// almacene en una variable
curl_setopt($ch, CURLOPT_RETURNTRANSFER, FALSE);
// Para informar todo lo relacionado al header de la conexion
curl_setopt($ch, CURLOPT_HEADER, FALSE);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

$xxx1 = curl_exec($ch);
curl_close($ch);
// Quitamos todas las etiquetas html existente dentro del retornado
$page = strip_tags($xxx1);
// Dividimos el resultado en arreglos donde encuentre :
$info = explode(":", $page);

// Dividimos este un resultado de la cedula en dos para sacar nac y cedula
$cn=explode('-',substr(trim($info[1]),0,-6));

 $persona = explode(' ',trim($info[2]));
 $rows=count($persona);
 $rows2=count($info);

   // Procedimiento cuando devuelve un nombre completo ejemplo
   //Array ( [0] => ADRIANA [1] => DEL [2] => CARMEN [3] => VAAMONDE [4] => MUÃ‘OZ Estado ) 5

   if($rows==5){
       $nombre1=$persona[0];
       $nombre2=$persona[1].' '.$persona[2];
       $apellido1=$persona[3];
       $apellido2=substr($persona[4],0,-6);
   // Procedimiento cuando devuelve los nombre completo de forma normal
   }elseif($rows==4){
       $nombre1=$persona[0];
       $nombre2=$persona[1];
       $apellido1=$persona[2];
       $apellido2=substr($persona[3],0,-6);
   }else{
   // Procedimiento cuando solo no esta registrado en el CNE que devuelve arreglos diferente a los demás
       // sobreescribo la variable $info debido que el comportamiento es diferente
       $info = explode(' ',$page);
       $rows2=count($info);
       $ced=substr($cn[1],0,-6);
       $nombre1=substr($info[9],0,-7);
       $nombre2=substr($info[11],0,-7);
       $apellido1=substr($info[13],0,-7);
       $apellido2=substr($info[15],0,-7);
   }/*.substr($apellido2,0,-6)*/

   //$nombres= $nombre1.' '.$nombre2;
    //$apel=substr($apellido2,0,-6);
   //$apellidos=$apellido1.' '.$apellido2;
   $pers=substr($info[2],0,-6);
   $persona2 = explode(' ',trim($pers));
   $nombres=$persona2[0].' '.$persona2[1];
   $apellidos=$persona2[2].' '.$persona2[3];
   //echo $apellidos.'<br>';
   echo 'Cedula= '.$nac.'-'.$ced.'<br>'.'Nombres= '.$nombres.'<br>'.'Apellidos= '.$apellidos.'<br>';
?>

