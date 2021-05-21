@extends('layouts.dashboard')
@section('pageheader')
    Gestion Dolar
@endsection
@section('content')
    <!-- Muestra errores -->
    @include('shared._errors')
    <div class="row">
        <div class="col-12">
            <div class="card ">
                <div class="card-header with-border">
                    <form action="{{ route('GestionDolar.store') }}" method="POST" accept-charset="utf-8">
                        <!-- Aquí agrega los datos del formulario -->
                        @include('gestion_dolar._fields')
                        <div class="col-12">
                            <div class="card-footer">
                                <button type="submit" class="btn btn-success pull-right">Guardar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
