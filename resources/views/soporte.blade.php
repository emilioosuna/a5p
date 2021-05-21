@extends('layouts.dashboard')
@section('pageheader')
Creditos
@endsection
@section('content')
<div class="row">
</div>

     <div class="row">
        <div class="col-md-12">
          <div class="card card">
            <div class="card-header bg-black">Soporte</div>
            <div class="card-body">
              <div class="panel card card-Teal">
               <div class="row">
                <div class="col-md-12">
                    @php
                    $p[1] = [
                        "frase" => "A menudo las personas están trabajando duro en la cosa equivocada. Trabajar en la cosa correcta probablemente es más importante que trabajar duro",
                        "autor" => "Caterina Fake",
                    ];
                    $p[2] = [
                        "frase" => "Mantente alejado de aquellas personas que tratan de menospreciar tus ambiciones. Las personas pequeñas siempre lo hacen, pero los verdaderamente grandes hacen sentirte que tú también puedes ser grande",
                        "autor" => "Mark Twain",
                    ];
                    $p[3] = [
                        "frase" => "El éxito es la suma de pequeños esfuerzos repetidos un día sí y otro también",
                        "autor" => "Robert Collier",
                    ];
                    $p[4] = [
                        "frase" => "Nada es particularmente difícil si lo divides en pequeños trabajos",
                        "autor" => "Henry Ford",
                    ];
                    $p[5] = [
                        "frase" => "He aprendido que los errores pueden ser tan buenos profesores como el éxito",
                        "autor" => "Jack Welch",
                    ];
                    $p[6] = [
                        "frase" => "Trabajar es lo que nos mantiene vivos, sin nuestro trabajo, no seríamos más que seres sin metas en la vida",
                        "autor" => "Anónimo",
                    ];
                    $p[7] = [
                        "frase" => "La motivación nos impulsa a comenzar y el hábito nos permite continuar",
                        "autor" => "Jim Ryun",
                    ];
                    $p[8] = [
                        "frase" => "Escoge un trabajo que te guste, y nunca tendrás que trabajar ni un solo día de tu vida",
                        "autor" => "Confucio",
                    ];
                    $p[9] = [
                        "frase" => "El trabajo que nunca se empieza es el que tarda más en finalizarse",
                        "autor" => "J.R.R. Tolkien",
                    ];
                    $p[10] = [
                        "frase" => "El éxito no se logra sólo con cualidades especiales. Es sobre todo un trabajo de constancia, de método y de organización",
                        "autor" => "Víctor Hugo",
                    ];
                    $i = rand(1, 10);
                    @endphp
                    <hr>
                    <br>
                    <blockquote style="position: relative;">
                     <p style="text-align: justify;"> </p>
                        <blockquote class="pull-right" style="position: relative;">
                            <p style="text-align: justify;">{{ '"' . ($p[$i]["frase"]) . '"'}}</p>
                            <small><cite title="Source Title"><b>{{ ($p[$i]["autor"]) }}</b></cite></small>
                        </blockquote>
                    </blockquote>
                    <script>
                        if(navigator.onLine){
                          var _smartsupp = _smartsupp || {};
                          _smartsupp.key = 'dd62a6c1692a94e530778bd1a0930f5e7a87effe';
                          window.smartsupp||(function(d) {
                            var s,c,o=smartsupp=function(){ o._.push(arguments)};o._=[];
                            s=d.getElementsByTagName('script')[0];c=d.createElement('script');
                            c.type='text/javascript';c.charset='utf-8';c.async=true;
                            c.src='https://www.smartsuppchat.com/loader.js?';s.parentNode.insertBefore(c,s);
                        })(document);
                    }else{
                        @php
                        echo 'swal("Disculpe!", "En estos Momentos usted no posee conexion a internet... no se podra realizar la conexion de soporte Por Favor intente mas tarde", "info")';
                        @endphp
                    }
                </script>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>


@endsection
