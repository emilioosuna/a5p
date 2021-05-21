@extends('layouts.dashboard')
@section('pageheader')
    Gestión Dolar
@endsection
@section('content')
    @include('shared._success')
    <div class="card ">
        <div class="card-header with-border">
            <div class="row">
                <div class="col-md-12">
                    <div class="d-flex justify-content-between">
                        <title>{{ $page_title }}</title>
                    </div>
                    <div class="card card">
                        <div class="card-header bg-black">
                            Listado Tasas
                            <div class="float-right">
                                @can('GestionDolar.create')
                                <a href="{{ route('GestionDolar.create') }}">
                                    <img src="{{ asset('adminlte/icons/add.png') }}" width="48px" title="Actualizar"></a>
                                @endcan
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
                                                    @can('GestionDolar.show')
                                                    <a href="{{ route('GestionDolar.show', $tasacambio->id) }}" class="btn btn-link btn-info" title="Historico Divisa"><i class="fa fa-eye" style="color:white"></i></a> |
                                                    @endcan
                                                    @can('GestionDolar.destroy')
                                                  {{--   <a href="{{ route('GestionDolar.edit', $tasacambio->id) }}" class="btn btn-link btn-warning" title="Modificar"><i class="fa fa-edit" style="color:white"></i></a> | --}}
                                                    <button type="button" onclick="destroy({{ $tasacambio->id }})" class="btn btn-link btn-danger" title="Eliminar"><i class="fa fa-trash" style="color:white"></i></button>
                                                    @endcan
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
<script>
    function destroy(e) {
        swal({
              title: "Esta Seguro que desea eliminar?",
              type: "warning",
              showCancelButton: true,
              confirmButtonClass: "btn-danger",
              confirmButtonText: "Si, Eliminar!",
              cancelButtonText: "No, cancelar!",
              closeOnConfirm: false,
              closeOnCancel: false
        },
            function(isConfirm) {
                if (isConfirm) {
                    document.getElementById('destroy['+e+']').submit();
                    swal("Borrado!", "Registro Eliminado con exito.", "success");
                } else {
                    swal("Cancelado", "Sin cambios", "error");
                }
            });
    }
</script>
