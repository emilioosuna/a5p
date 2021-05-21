<html>
 <head>
    <style>
       body {
          margin: 0;
          font-family: Arial, Helvetica, sans-serif;
        }

        .hero-image {
          background-image: url("{{ asset('assets/img/bg8.jpg') }}");
          background-color: #cccccc;
          height: 100%;
          background-position: center;
          background-repeat: no-repeat;
          background-size: cover;
          position: relative;
        }
        .hero-text {
          text-align: center;
          position: absolute;
          top: 50%;
          left: 45%;
          transform: translate(-50%, -50%);
          color: white;
        }
    </style>
  <script language="JavaScript">

   function abreSinNavegacion(){
    // var ventana = window.self;
    open('/ppal', 'principal', 'location=no,menubar=no,status=no,toolbar=no');
    // ventana.close();
    // cerrar();
   }

   function cerrar() {
    window.close();
    var ventana = window.self;
    ventana.opener = window.self;
    ventana.close();
   }
   function timeout(){
    setTimeout("cerrar()", 1000)
    }
  </script>
 </head>
 <body onload="timeout();abreSinNavegacion();">
    <div class="hero-image">
  <div class="hero-text">
    <h1 style="font-size:35px">A5P SISTEM</h1>
    <h3>asinconve@gmail.com</h3>
    <button onclick="cerrar()">Cerrar </button>
  </div>
</div>
 </body>
</html>
