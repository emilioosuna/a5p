@extends('layouts.login')
@section('content')
@php
    $i=1;
    // $i = rand(1,6);
    $p[1] = [
       "image" => "assets/img/bg8.jpg",
    ];
    // $p[2] = [
    //     "image" =>"assets/img/bg11.jpg",
    // ];
    // $p[3] = [
    //     "image" =>"assets/img/bg12.jpg",
    // ];
    // $p[4] = [
    //    "image" =>"assets/img/bg13.jpg",
    // ];
    // $p[5] = [
    //     "image" =>"assets/img/bg14.jpg",
    // ];
    // $p[6] = [
    //     "image" =>"assets/img/bg10.jpg",
    // ];
@endphp
<div class="page-header clear-filter" filter-color="green">
    <div class="page-header-image" style="background-image:url({{ asset($p[$i]["image"]) }})"></div>
    <div class="content">
      <div class="container">
        <div class="col-md-4 ml-auto mr-auto">
          <div class="card card-login card-plain">
            <form  class="form" action="{{ route('login') }}" method="POST" accept-charset="utf-8">
              {{ csrf_field() }}
              @if(Session::has('flash_message'))
                  <div class="alert alert-info msg">
                    <button type="buttom" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <ul>
                       <li>{{Session::get('flash_message')}}</li>
                       {!! Session::forget('flash_message') !!}
                   </ul>
                 </div>
             @endif
             @if(Session::has('flash_wmessage'))
                  <div class="alert alert-warning msg">
                    <button type="buttom" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <ul>
                       <li>{{Session::get('flash_wmessage')}}</li>
                       {!! Session::forget('flash_wmessage') !!}
                   </ul>
                 </div>
             @endif
             <div class="block-content" style="margin-top: -30%; margin-bottom:  -20%;">
                <div class="p-sm-3 px-lg-4 py-lg-5">
                    <img src="{{ asset('assets/img/logoA5P.png') }}" width="550px" alt="" >
                    <p style="margin-bottom:  15%;"><b>Bienvenido,</b> Ingrese sus datos para iniciar sesion</p>
                </div>
            </div>
              <div class="card-body">
                <div class="input-group no-border input-lg" {{ $errors->has('usuario') ? 'has-error' : '' }}>
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="now-ui-icons users_circle-08"></i>
                    </span>
                  </div>
                  <input class="form-control" type="text" name="usuario" value="" placeholder="USUARIO">
                </div>
                 {!! $errors->first('usuario','<p class="text-red">:message</p>') !!}
                <div class="input-group no-border input-lg"  {{ $errors->has('password') ? 'has-error' : '' }}>
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="now-ui-icons text_caps-small"></i>
                    </span>
                  </div>
                  <input class="form-control" type="password" name="password" value="" placeholder="CLAVE">
                </div>

                 <button type="submit" class="btn btn-round btn-lg btn-block" name='login'>Ingresar</button>
              </div>
              <div class="card-footer text-center"></div>
            </form>
          </div>
        </div>
      </div>
    </div>

    @if(Session::has('message'))
        @php
            $mensaje=Session::get('message');
             echo '<script>
                    swal("Gracias!", "'.$mensaje.'", "success")
                    </script>';
         @endphp
    @endif

@endsection
