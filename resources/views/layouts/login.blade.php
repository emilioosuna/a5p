<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
     <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('faviocon.png') }}">
  <title>
    A5P
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
   <link rel="stylesheet"  href="{{ asset('adminlte/plugins/fontawesome-free/css/all.css')}}">
  <!-- CSS Files -->
  <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets/css/now-ui-kit.css?v=1.2.0') }}" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="{{ asset('assets/demo/demo.css') }}" rel="stylesheet" />
  <script src="{{ asset('sweetalert/dist/sweetalert.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('sweetalert/dist/sweetalert.css') }}">
</head>

<body class="login-page sidebar-collapse">
  @yield('content')

    <nav class="navbar navbar-expand-lg bg-primary fixed-top navbar-transparent " color-on-scroll="400">
    <div class="container">
        <ul class="navbar-nav">
         {{--    <li class="nav-item" style="float:left;">
            <a class="nav-link" href="#" data-toggle="modal" data-target="#create2" > REGISTRATE </a>
          </li>
         <li class="nav-item" style="float:left;">
            <a class="nav-link" href="#"  data-toggle="modal" data-target="#create"> CONSULTA TU VEHICULO </a>
          </li> --}}
      </ul>
      <div class="collapse navbar-collapse justify-content-end" id="navigation" data-nav-image="../assets/img/blurred-image-1.jpg">
      </div>
    </div>
  </nav>
    <footer class="footer" >
      <div class="container">
        <nav>
          <ul>
            <li>

            </li>
          </ul>
        </nav>
        <div class="copyright" id="copyright">
           <a href="http://asinocn.com" target="blank" style="color:white">
                <i class="fa fa-coffee"></i> ASINCON SOLUCIONES INFORMATICAS
              </a>
        </div>
      </div>
    </footer>
  </div>

  <!--   Core JS Files   -->
  <script src="{{ asset('assets/js/core/jquery.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('assets/js/core/popper.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('assets/js/core/bootstrap.min.js') }}" type="text/javascript"></script>
  <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
  <script src="{{ asset('assets/js/plugins/bootstrap-switch.js') }}"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="{{ asset('assets/js/plugins/nouislider.min.js') }}" type="text/javascript"></script>
  <!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
  <script src="{{ asset('assets/js/plugins/bootstrap-datepicker.js') }}" type="text/javascript"></script>
  <script src="{{ asset('sweetalert/dist/sweetalert.js')}}"></script>
    <!-- InputMask -->
    <script src="{{ asset('adminlte/plugins/input-mask/jquery.inputmask.js') }}"></script>
    <script src="{{ asset('adminlte/plugins/input-mask/jquery.inputmask.date.extensions.js') }}"></script>
    <script src="{{ asset('adminlte/plugins/input-mask/jquery.inputmask.extensions.js') }}"></script>
</body>




 <script>

function validaPlaca(e) {
key = e.keyCode || e.which;
tecla = String.fromCharCode(key).toString();
 //Se define todo lo que se quiere que se muestre
caracter = "abcdefghijklmnñopqrstuvwxyzABCDEFGHIJKLMNÑOPQRSTUVWXYZ0123456789";
especiales = [8,13];

tecla_especial = false;
for (var i in especiales) {
      if(key == especiales[i]) {
    tecla_especial = true;
     break;
      }
}
if(caracter.indexOf (tecla) == -1 && !tecla_especial){
    return false;
}
}
function mayus(e) {
    e.value = e.value.toUpperCase();

}
 </script>
 <script type="text/javascript">
$(document).ready(function() {
    setTimeout(function() {
        $(".msg").fadeOut(500);
    },3000);
});
</script>

  <script type='text/javascript'>
var isCtrl = false;
document.onkeyup=function(e)
{
    if(e.which == 17)
    isCtrl=false;
}
document.onkeydown=function(e)
{
    if(e.which == 17)
    isCtrl=true;
    if(isCtrl == true)
    {
        return false;
    }
}
var isNS = (navigator.appName == "Netscape") ? 1 : 0;
if(navigator.appName == "Netscape") document.captureEvents(Event.MOUSEDOWN||Event.MOUSEUP);
function mischandler(){
    return false;
}
function mousehandler(e){
    var myevent = (isNS) ? e : event;
    var eventbutton = (isNS) ? myevent.which : myevent.button;
    if((eventbutton==2)||(eventbutton==3)) return false;
}
document.oncontextmenu = mischandler;
document.onmousedown = mousehandler;
document.onmouseup = mousehandler;
</script>
</html>
