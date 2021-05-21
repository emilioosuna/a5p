@extends('layouts.dashboard')
@section('pageheader')
    Modificar datos del cliente
@endsection
@section('content')
    <!-- Muestra errores -->
    @include('shared._errors')
    @include('shared._success')
    <div class="row">
        <div class="col-12">
            <div class="card ">
                <div class="card-header with-border bg-black">
                    <form action='{{ url("clientes/{$cliente->id}") }}' method="POST" accept-charset="utf-8">
                            <!-- Pasa el metodo oculto -->
                            {{ method_field('PUT') }}
                            <!-- Aquí agrega los datos del formulario -->
                            @include('clientes._fields')
                            <div class="col-md-12">
                                <div class="box-footer">
                                    <button type="submit" class="btn btn-success pull-right">Guardar</button>
                                </div>
                            </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
@endsection
