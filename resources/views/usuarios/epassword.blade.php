@extends('layouts.dashboard')
@section('pageheader')
    Usuarios Sistema
@endsection
@section('content')
    <div class="card card">
            <div class="card-header bg-black">Editar Password Usuario <b>{{$id->nombres.' '.$id->apellidos}}</b>
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
                 <form role="cform" name="cform" method="POST" action="{{ url("/usuarios/pass/{$id->id}") }}">
                            {{ method_field('PUT') }}
                            {{ csrf_field() }}
                            <div class="row">
                                    <div class="col-4">
                                    </div>
                                   <label for="pass">Password:</label>
                                    <div class="col-4">
                                        <input class="form-control" type="password" name="pass" id="pass"
                                        required>
                                    </div>
                                    <div class="col-4">
                                    </div>
                            </div>
                    </div>
                           <div class="card-footer">
                    <button class="btn btn-info float-right" type="reset">Limpiar</button>
                    <button class="btn btn-info float-right" type="submit">Actualizar Clave</button>
                </div>
                </form>
    </div>
</div>
@endsection
