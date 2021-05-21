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
    <div class="card card">
            <div class="card-header bg-black">Editar Nivel Usuario <b>{{$id->nombres.' '.$id->apellidos}}</b>
                <div class="float-right">
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
                 <form role="cform" name="cform" method="POST" action="{{ url("/usuarios/niv/{$id->id}") }}">
                            {{ method_field('PUT') }}
                            {{ csrf_field() }}
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
                    <button class="btn btn-info float-right" type="submit">Actualizar Nivel</button>
                </div>
                </form>
    </div>
</div>

@endsection


