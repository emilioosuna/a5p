@extends('layouts.dashboard')
@section('pageheader')
    Roles y Permisos del Sistema
@endsection
@section('content')
 <title>{{ $page_title }}</title>
<div class="col-md-12">
<div class="card card">
    <div class="card-header bg-black">Roles
        <div class="float-right">
        {{--     @can('roles.create')
            <a href="{{ route('roles.create') }}"
            class="pull-right">
            <img src="{{ asset('adminlte/icons/add.png') }}" width="48px" title="Agregar Role">
        </a>
        @endcan --}}

        </div>
    </div>
    <div class="card-body">
        @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
        @endif
    @if(Session::has('flash_rmessage'))
    <div class="alert alert-success msg">
        <button type="buttom" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        {{Session::get('flash_rmessage')}}
    </div>
    @endif
           <table id="datatable1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th width="10px">ID</th>
                    <th>Nombre</th>
                    <th colspan="3">Acciones</th>
                </tr>
            </thead>
            <tbody>
            @foreach($roles as $role)
            <tr>
                <td>{{ $role->id }}</td>
                <td>{{ $role->name }}</td>
               {{--  @can('roles.show')
                <td width="10px">
                    <a href="{{ route('roles.show', $role->id) }}">
                        <span class="btn btn-sm btn-primary"  title="ver Rol"><i class="fa fa-eye" style="color:white"></i></span>
                    </a>
                </td>
                @endcan --}}
                @can('roles.edit')
                <td width="10px">
                    <a href="{{ route('roles.edit', $role->id) }}">
                        <span class="btn btn-sm btn-warning"  title="Editar Rol"><i class="fa fa-edit" style="color:white"></i></span>
                    </a>
                </td>
                @endcan
              {{--   @can('roles.destroy')
                <td width="10px">
                    {!! Form::open(['route' => ['roles.destroy', $role->id],
                    'method' => 'DELETE']) !!}
                    <button class="btn btn-sm btn-danger">
                     <span class="fa fa-trash" style="font-size:18px" title="Borrar Rol"></span>
                 </button>
                 {!! Form::close() !!}
             </td>
             @endcan --}}
         </tr>
         @endforeach
     </tbody>
    </table>

</div>
</div>
</div>
@endsection

