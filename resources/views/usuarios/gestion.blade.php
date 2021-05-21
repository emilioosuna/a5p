@extends('layouts.dashboard')
@section('pageheader')
    Usuarios Sistema
@endsection
@section('content')

<div class="col-md-12">
<div class="card card">
    <div class="card-header bg-black">Gestion Usuarios
        <div class="float-right">
            @can('agregar_usuario')
             <a href="{{ route('agregar_usuario') }}">
                 <img src="{{ asset('adminlte/icons/add.png') }}" width="48px" title="Agregar Usuario"></a>
            @endcan

        </div>
    </div>
    <div class="card-body">
        @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
        @endif
        @if($users->isNotempty())
        <table id="datatable1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Cedula Rif</th>
                    <th>Nombre Razon</th>
                    <th>Usuario</th>
                    <th>Correo</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @php
                                    // dd($users);
                @endphp
                @foreach($users as $user)

                <tr>
                    <th>{{$user->id}}</th>
                    <th>{{$user->cedula}}</th>
                    <td>{{$user->nombres.' '.$user->apellidos}}</td>
                    <td>{{$user->usuario}}</td>
                    <td>{{$user->correo}}</td>
                    <td>
                        <form action="{{ route('borrarUsuario', $user->id) }}" method="POST">
                            {{csrf_field()}}
                            {{method_field('DELETE')}}


                                @can('editarUsuario')
                                <a href="{{ route('editarUsuario', ['id' => $user->id]) }}" ><span class="btn btn-sm btn-warning"  title="Editar Usuario"><i class="fa fa-edit" style="color:white"></i></span></a>
                                @endcan
                                @can('editarPasswordUsuario')
                                <a href="{{ route('editarPasswordUsuario', ['id' => $user->id]) }}" ><span class="btn btn-sm btn-success"   title="Editar Password"> <i class="fa fa-unlock"></i></span></a>
                                @endcan
                                @can('editarNivelUsuario')
                                <a href="{{ route('editarNivelUsuario', ['id' => $user->id]) }}" ><span class="btn btn-sm btn-info "   title="Editar Nivel"> <i class="fa fa-sort"></i></span></a>
                                <button type="submit" class="btn btn-sm btn-danger"><span class="fa fa-trash" style="font-size:18px" title="Borrar Usuario"></span></button>@endcan


                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @else
    <p>No Existen Usuarios!!!</p>
    @endif
    @if(Session::has('flash_umessage'))
    <div class="alert alert-info msg">
        <button type="buttom" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        {{Session::get('flash_umessage')}}
    </div>
    @endif
</div>
</div>
</div>
@endsection

