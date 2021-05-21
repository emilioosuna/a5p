<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="icon" type="image/png" sizes="64x64" href="{{ asset('faviocon.png') }}">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  {{-- <title>@yield('title')</title> --}}
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('adminlte/plugins/fontawesome-free/css/all.min.css') }}">

  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="{{asset('adminlte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{asset('adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{asset('adminlte/plugins/jqvmap/jqvmap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('adminlte/dist/css/adminlte.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('adminlte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{asset('adminlte/plugins/daterangepicker/daterangepicker.css')}}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{asset('adminlte/plugins/summernote/summernote-bs4.css')}}">
  <!-- Google Font: Source Sans Pro -->
  {{-- <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet"> --}}
  <!-- DataTables -->
  <link rel="stylesheet" href="{{asset('adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.css')}}">
  <link rel="stylesheet" href="{{ asset('sweetalert/dist/sweetalert.css') }}">
  <!-- Select2 -->
  <link rel="stylesheet" href="{{ asset('adminlte/plugins/select2/css/select2.min.css')}}">
  <link rel="stylesheet" href="{{ asset('adminlte/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="{{asset('adminlte/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') }}">
  <!-- form wizard -->
  <link href="{{ asset('formwizard/formwizard.css')}}" rel="stylesheet">
  <script type="text/javascript" language="javascript" src="{{ asset('formwizard/jquery-3.2.1.min.js')}}"></script>
  <script type="text/javascript" language="javascript" src="{{ asset('formwizard/jquery-1.11.1.min.js')}}"></script>
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="{{ asset('adminlte/plugins/iCheck/all.css') }}">
  <link href="{{ asset('adminlte/dist/css/select2/select2-bootstrap.min.css') }}" rel="stylesheet">
  <script src="{{ asset('sweetalert/dist/sweetalert.js') }}"></script>
  <link rel="stylesheet" href="{{ asset('sweetalert/dist/sweetalert.css') }}">
    <!-- Ekko Lightbox -->
  <link rel="stylesheet" href="{{ asset('adminlte/plugins/ekko-lightbox/ekko-lightbox.css')}}">

</head>
<body class="hold-transition sidebar-mini layout-fixed ">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  {{-- <nav class="main-header navbar navbar-expand navbar-white navbar-light">#616161--}}
    <nav class="main-header navbar navbar-expand navbar-dark" >
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars" style="color: white;"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="fa fa-bell" style="font-size: 24px; color:white;"></i>
          <span class="badge badge-warning navbar-badge" style="font-size: 10px;">!</span>
        </a>

        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header"><b>Notificaciones</b><span class="float-right text-muted text-sm">{{ date('d/m/Y') }}</span></span>
          <div class="dropdown-divider"></div>

        </div>
      </li>

      <li>
        <a href="#" class="nav-link" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">

                <i class="fa fa-power-off" title="Salir del Sistema" title="Salir del Sistema" style="font-size: 24px; color: white;"></i>
            </a>
            <form id="logout-form" action="{{ route('salir') }}" method="POST" style="display: none;">
                @csrf
            </form>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  {{-- <aside class="main-sidebar sidebar-ligth-primary elevation-4" style="background-color: white;">style="background-color: #E0E0E0" --}}
      <aside class="main-sidebar sidebar-ligth-primary elevation-4" style="background-color: white;">
    <!-- Brand Logo #757575-->
    <a href="{{ route('dashboard') }}" class="brand-link" style="background-color: #343A40">
      <img src="{{ asset('assets/img/logoA5P.png') }}"
           alt="ODIN Logo"
           class="brand-image img-circle elevation-3">
      <span class="brand-text font-weight-light" style="color:white;">A5P</span>
    </a>
     {{-- <li class="dropdown-divider"></li> --}}
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
    <i class="fa fa-circle text-success" style="margin-top: 10px; margin-left: 20px"></i>
        <div class="info">
          {{-- <a href="#" class="d-block" style="color:black;">{{ auth()->user()->nombres . ' ' . auth()->user()->apellidos }}</a> --}}
          <a href="#" class="d-block" style="color:black;">{{ auth()->user()->nombres_apellidos }}</a>
        </div>
      </div>
       {{--   <li class="dropdown-divider"></li> --}}
      <!-- Sidebar Menu -->
      <nav class="mt-1">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
             @include('menu')
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
         @if(Session::has('flash_message'))
                <div class="alert alert-warning">
                    <button type="buttom" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <b>Disculpe </b>
                    <ul>
                       <li>{{Session::get('flash_message')}}</li>
                    </ul>
                </div>
                @endif
                @yield('content')
  </div>
  <!-- /.content-wrapper -->

  {{-- <footer class="main-footer" style="background-color: #343A40"> --}}
    <footer class="main-footer" style="background-color: #c5c5c5;">
            <div class="row col-md-12">
            <?php $fa = date("Y"); ?>
            <div class="col-md-5" style="color:black;padding-top: 25px;">
                  <a href="#" style="color:black">A5P </a><strong>Copyright &copy; {{$fa}}.</strong> Venezuela
            </div>
            <div class="col-md-2"></div>
            <div class="col-md-5">
                <div class="float-right d-none d-sm-inline-block">
                     <a href="http://asincon.com"><img src="{{asset('assets/img/basincon.png')}}" width="100%" Title="ASINCON SOLUCIONES INFORMÁTICAS."alt=""></a>
                {{--     <a href="http://asincon.com"><img src="{{asset('assets/img/LOGO2-PNG.png')}}" width="128px" Title="ASINCON SOLUCIONES INFORMÁTICAS."alt=""></a> --}}
                </div>
            </div>
        </div>
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark"></aside>
</div>
<!-- ./wrapper -->
<!-- jQuery -->
<script src="{{ asset('adminlte/plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('adminlte/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{ asset('adminlte/plugins/chart.js/Chart.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{ asset('adminlte/plugins/sparklines/sparkline.js')}}"></script>
<!-- JQVMap -->
<script src="{{ asset('adminlte/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{ asset('adminlte/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset('adminlte/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{ asset('adminlte/plugins/moment/moment.min.js')}}"></script>
<script src="{{ asset('adminlte/plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset('adminlte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Summernote -->
<script src="{{ asset('adminlte/plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('adminlte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('adminlte/dist/js/adminlte.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('adminlte/dist/js/pages/dashboard.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('adminlte/dist/js/demo.js')}}"></script>
<!-- InputMask -->
<script src="{{ asset('adminlte/plugins/moment/moment.min.js')}}"></script>
<script src="{{ asset('adminlte/plugins/inputmask/min/jquery.inputmask.bundle.min.js')}}"></script>
<!-- DataTables -->
<script src="{{ asset('adminlte/plugins/datatables/jquery.dataTables.js')}}"></script>
<script src="{{ asset('adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.js')}}"></script>
<!-- Select2 -->
<script src="{{ asset('adminlte/plugins/select2/js/select2.full.min.js')}}"></script>
<script src="{{ asset('sweetalert/dist/sweetalert.js')}}"></script>
<!-- Ekko Lightbox -->
<script src="{{ asset('adminlte/plugins/ekko-lightbox/ekko-lightbox.min.js')}}"></script>
<!-- Filterizr-->
<script src="{{ asset('adminlte/plugins/filterizr/jquery.filterizr.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{ asset('adminlte/plugins/chart.js/Chart.min.js')}}"></script>
<!-- Bootstrap Switch -->
<script src="{{ asset('adminlte/plugins/bootstrap-switch/js/bootstrap-switch.min.js')}}"></script>

<script src="{{ asset('js/lib_javascript.js') }}"></script>

@include('scripts.scripts')
{{-- PARA EXPORTAR A EXCEL PDF Y/O IMPRIMIR LOS DATABLES DIRECTOS DESDE UN HTML --}}
<script src="{{ asset('js/dataTables.buttons.min.js')}}"></script>
<script src="{{ asset('js/buttons.flash.min.js')}}"></script>
<script src="{{ asset('js/jszip.min.js')}}"></script>
<script src="{{ asset('js/jszip.min.js')}}"></script>
<script src="{{ asset('js/pdfmake.min.js')}}"></script>
<script src="{{ asset('js/vfs_fonts.js')}}"></script>
<script src="{{ asset('js/buttons.html5.min.js')}}"></script>
<script src="{{ asset('js/buttons.print.min.js')}}"></script>
</body>
</html>
