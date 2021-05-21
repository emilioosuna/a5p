<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('adminlte/bower_components/font-awesome/css/font-awesome.min.css')}}">

<style>
    @page {
    margin-top: 0.5cm;
    margin-bottom: 0.5cm;
    margin-left: 0.5cm;
    margin-right: 0.5cm;
}
    .rcorners {
      border-radius: 25px;
      border: 2px solid #c3c3c3;
      padding: 0px;
      margin-bottom: 5px;
    }
    .rcorners2 {
      position: absolute;
      top:0mm;
      border-radius: 25px;
      border: 2px solid #c3c3c3;
      padding: 0px;
      float: right;
    }
    .rcorners3 {
      position: absolute;
      border-radius: 25px;
      border: 2px solid #c3c3c3;
      float: right;
      padding: 0px;
      top: 158mm;
    }
    .letrascantidad{
      position: absolute;
      float: left;
      padding: 0px;
      top: 182mm;
    }
thead:before, thead:after { display: none; }
tbody:before, tbody:after { display: none; }
table {
    border-collapse: collapse;
}
table th {
    /*border-left: 0;
    border-right: 0.01em solid #ccc;
    border-top: 0;
    border-bottom: 0.01em solid #ccc;*/
    background-color: #D3D3D3;
}
    body{
        width: 100%;
    }
.footer {
  display:block;
  position: absolute;
  bottom: 0.5px;
  color: black;
  width: 100vw;
  text-transform: uppercase;
  text-align: center;
}
tr:nth-child(odd) {
    background-color: #ffffff;
}

tr:nth-child(even) {
    background-color: #D8D8D8;
}
.th {
  font-size: 11px;
  border: grey 2px solid;
  height:20px;
}
.title{
    font-size: 14px;
    text-align: center;
    text-transform: uppercase;
}
.ttex{
    font-size: 11px;
    margin-top: -2px;
    font-weight: bold;
    text-transform: uppercase;
    text-align: center;
}
.wttex{
    font-size: 11px;
    margin-top: -2px;
    font-weight: bold;
    text-transform: uppercase;
    color:white;
}
.text{
    font-size: 10px;
    margin-bottom: 0px;
}
.stex{
    font-size: 10px;
    font-weight: bold;
    text-transform: uppercase;
    text-align: center;
    height:10px;
    background-color: #D3D3D3;
}
.stext{
    font-size: 10px;
    text-transform: uppercase;
    text-align: center;
    height:10px;
}
.stextc{
    font-size: 10px;
    text-transform: uppercase;
    text-align: center;
    height:25px;
}
.stextn{
    font-size: 8px;
    text-transform: uppercase;
    text-align: center;
    height:8px;
    line-height : 12px;
}
.cintillo {
  margin-top: 0px;
  width: 100vw;
  display:block;
  /*background-color: #356464;*/
}
.izquierda {
    float: left;
    width: 40vw;
    display:block;
    margin-top:-20px;
    text-transform: uppercase;
    font-size: 11px;
    /*background-color: #356464;*/
}

.centro {
    float: left;
    width: 25vw;
    display:block;
    text-align: center;
    margin-top:-20px;
    /*background-color: #258798;*/
}
.derecha {
   float: right;
   width: 30vw;
   display:block;
   text-align: right;
   margin-top:-20px;
   text-transform: uppercase;
   font-size: 11px;
   /*background-color: #569874;*/
}
img .derecha{
    float: right;
}
.slogan{
    float: right;
    margin-top:0px;
    text-transform: uppercase;
    font-size: 11px;
}

.titulo{
    display:block;
    width: 100vw;
    float: left;
    /*background-color: #cccc;*/
}
.clearfix {
 overflow: auto;
}
.notapie{
  display:block;
  position: absolute;
  bottom: 100px;
  font-weight: bold;
  text-align: left;
  text-transform: uppercase;
  font-size: 11px;
  float: left;
  width: 25vw;
  display:block;
  text-align: center;
  margin-left:10px;
}
.sloganpie{
    display:block;
    position: absolute;
    float: right;
    margin-right:10px;
    /*text-transform: uppercase;*/
    font-size: 11px;
    bottom: 100px;
    font-weight: bold;
}
</style>
  <title>{{ $titulo ?? '' }}</title>
</head>
<body>
      <div class="row">
      {{-- <div class="izquierda clearfix"><img  src="{{ asset("$logo")}}" height="60px"></div>
      <div class="centro clearfix"><img  src="{{ asset('assets/img/zieglerlc_reporte.jpg')}}" height="60px"></div>
      <span class="slogan clearfix"><i>La Excelencia nos Distingue</i></span></div> --}}
      <div class="cintillo clearfix"><img src="{{asset('assets/img/cintillo_aerotren.png')}}" width="100%"></div>
      <div class="titulo clearfix"><h5>{{ $titulo ?? '' }} </h5></div>
  </div>
 <br><br>
 <section class="content container-fluid">
      @yield('content')
    </section>
<footer>
     <div class="footer">
        {{-- <img src="{{asset('zeus.png')}}" width="48px"> - &copy;{{date('Y')}} - <img src="{{asset('assets/img/tencmastericon.png')}}" width="48px"> --}}
        <img src="{{asset('assets/img/cintillo_pie_aerotren.png')}}" width="100%">
    </div>
</footer>
</body>
</html>
