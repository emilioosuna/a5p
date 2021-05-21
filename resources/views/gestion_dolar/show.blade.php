@extends('layouts.dashboard')
@section('pageheader')
    Historico
@endsection
@section('content')
    <div class="card ">
        <div class="card-header with-border">
            <div class="row">
                <div class="col-md-12">
                    <div class="d-flex justify-content-between">
                        <title>{{ $page_title }}</title>
                    </div>
                    <div class="card card">
                        <div class="card-header bg-black">
                            Divisas Tasas
                            <div class="float-right">
                                <a href="{{ route('GestionDolar.index') }}">
                                    <img src="{{ asset('adminlte/icons/back.png') }}" width="48px" title="Volver"></a>
                            </div>
                        </div>
                        <div class="card-body">
                            <table id="datatable1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Tipo</th>
                                        <th>F Actualización</th>
                                        <th>H Actualización</th>
                                        <th>Valor</th>
                                        <th>Estatus</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($tasacambios as $tasacambio)
                                        <tr>
                                            <td>{{ $tasacambio->tnombre }}</td>
                                            <td>{{ $tasacambio->factualizacion }}</td>
                                            <td>{{ $tasacambio->hactualizacion }}</td>
                                            <td>{{ $tasacambio->valor }}</td>
                                            <td>{{ $tasacambio->nstatus }}</td>
                                            <td>
                                                <form action="{{ route('GestionDolar.destroy', $tasacambio->id) }}" id="destroy[{{ $tasacambio->id }}]" method="POST" accept-charset="utf-8" >
                                                    <!-- Para protejer la página de ataques POST (token) -->
                                                    {{ csrf_field() }}
                                                    <!-- Llama por metodo a la página, para eliminar  -->
                                                    {{ method_field('DELETE')}}
                                                    {{-- <a href="{{ route('clientes.show', $tasacambio->id) }}" class="btn btn-link btn-info" title="Historico Divisa"><i class="fa fa-eye" style="color:white"></i></a> |
                                                    <a href="{{ route('clientes.edit', $tasacambio->id) }}" class="btn btn-link btn-warning" title="Modificar"><i class="fa fa-edit" style="color:white"></i></a> | --}}
                                                    <button type="button" onclick="destroy({{ $tasacambio->id }})" class="btn btn-link btn-danger" title="Eliminar"><i class="fa fa-trash" style="color:white"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


