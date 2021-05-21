@extends('layouts.dashboard')
@section('pageheader')
    Usuarios Sistema
@endsection
 <script>
  function justNumbers(e)
        {
        var keynum = window.event ? window.event.keyCode : e.which;
        if ((keynum == 8) || (keynum == 46))
        return true;

        return /\d/.test(String.fromCharCode(keynum));
        }
 </script>
@section('content')
<div class="col-12">
    <div class="card card">
          <div class="card-header bg-black">
                Editar Usuario<div class="float-right">
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
                 <form role="cform" name="cform" method="POST" action="{{ url("usuarios/{$id->id}") }}">
                            {{ method_field('PUT') }}
                            {{ csrf_field() }}
                            <div class="row" >
                                <div class="col-4">
                                    <label for="mail">Cedula / Rif:</label>
                                    <div class="input-group mb-3">
                                      <div class="input-group-prepend">
                                         <select name="nac"  placeholder="" id="nac"  class="form-control" readonly>
                                                <option value="{{ old('nac', substr($id->cedula,0,1)) }}" >{{ old('cedula', substr($id->cedula,0,1)) }}</option>
                                            </select>
                                    </div>
                                     <input class="form-control" type="text" id="cedrif" name="cedrif"  value="{{ old('cedrif',substr($id->cedula,2,15)) }}" readonly/>
                                </div>
                            </div>
                            <div class="col-4">
                                <label  for="normaz">Nombre / Razon:</label>
                                  <input class="form-control" type="text" name="nomraz" id="nomraz"
                                        value="{{ old('nomraz', $id->nombres) }}" required>
                            </div>
                            <div class="col-4">
                                <label  for="apellidos">Apellidos:</label>
                                <input class="form-control" type="text" name="apellidos" id="apellidos" value="{{ old('apellidos', $id->apellidos) }}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                 <label  for="mail">Correo:</label>
                                  <input class="form-control" type="mail" name="mail" id="mail"
                                        value="{{ old('mail', $id->correo) }}" required>
                            </div>
                            <div class="col-4">
                                <label  for="usuario">Usuario:</label>
                                <input class="form-control" type="text" name="usuario" id="usuario" value="{{ old('usuario', $id->usuario) }}" readonly>
                            </div>
                            <div class="col-4">

                            </div>
                        </div>
                </div>

                <div class="card-footer">
                    <button class="btn btn-info float-right" type="reset">Limpiar</button>
                    <button class="btn btn-info float-right" type="submit">Editar Usuario</button>
                </div>
                </form>
    </div>
</div>
</div>
@endsection


