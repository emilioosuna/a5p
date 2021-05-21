@extends('layouts.dashboard')
@section('pageheader')
    Usuarios Sistema
@endsection
@section('content')
 <script>
  function justNumbers(e)
        {
        var keynum = window.event ? window.event.keyCode : e.which;
        if ((keynum == 8) || (keynum == 46))
        return true;

        return /\d/.test(String.fromCharCode(keynum));
        }
 </script>
<div class="col-md-12">
    <div class="card card">
            <div class="card-header bg-black">
                Nuevo Usuario <div class="float-right">
                    <a href="{{ route('gestion_usuarios') }}">
                        <img src="{{ asset('adminlte/icons/back.png') }}" width="48px" title="volver"></a>
                </div>
            </div>
            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                 @if(Session::has('flash_message'))
                <div class="alert alert-danger">
                    <button type="buttom" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <b>Disculpe </b>
                    <ul>
                       <li>{{Session::get('flash_message')}}</li>
                    </ul>
                </div>
                @endif
                @php
                   //dd($data);
                @endphp
                @if ($errors->any())
                <div class="alert alert-danger">
                    <button type="buttom" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <b>Por favor corrige los errores debajo:</b>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
               @endif</br>
                 <form role="cform" name="cform" method="POST" action="{{ route('agregaUsuario') }}">
                            {{ csrf_field() }}
                            <div class="row" >
                                <div class="col-4">
                                    <label for="mail">Cedula / Rif:</label>
                                    <div class="input-group mb-3">
                                      <div class="input-group-prepend">
                                         <select name="nac"  placeholder="" id="nac"  class="form-control">
                                                <option value="{{ old('nac') }}" selectd>{{ old('nac') }}</option>
                                                <option value="V">V</option>
                                                <option value="E">E</option>
                                                <option value="J">J</option>
                                                <option value="G">G</option>
                                            </select>
                                    </div>
                                    <input autofocus="true" class="form-control" type="text" id="cedrif" name="cedrif" value="{{ old('cedrif') }}" onkeypress="return justNumbers(event);" placeholder="123456789" />
                                </div>
                            </div>
                            <div class="col-4">
                                <label  for="normaz">Nombre / Razon:</label>
                                <input class="form-control" type="text" name="nomraz" id="nomraz"
                                value="{{ old('nomraz') }}">
                            </div>
                            <div class="col-4">
                                <label  for="apellidos">Apellidos:</label>
                                <input class="form-control" type="text" name="apellidos" id="apellidos" value="{{ old('apellidos') }}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                 <label  for="mail">Correo:</label>
                                 <input class="form-control" type="mail" name="mail" id="mail"
                                 value="{{ old('mail') }}">
                            </div>
                            <div class="col-4">
                                <label  for="usuario">Usuario:</label>
                                <input class="form-control" type="text" name="usuario" id="usuario" value="{{ old('usuario') }}">
                            </div>
                            <div class="col-4">
                                <label  for="mail">Password:</label>
                                <input class="form-control" type="password" name="pass" id="pass">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <label  for="nivel">Nivel:</label>
                                <select name="nivel" id="nivel" class="form-control" >
                                    <option value="">---</option>
                                    @foreach ($roles as $rol)
                                    <option value="{{ $rol->id }}">{{ $rol->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-4">
                            </div>
                            <div class="col-4">

                            </div>
                        </div>
                </div>
                <div class="card-footer">
                    <button class="btn btn-info float-right" type="reset">Limpiar</button>
                    <button class="btn btn-info float-right" type="submit">Registar Usuario</button>
                </div>
                </form>
    </div>
</div>
@endsection


