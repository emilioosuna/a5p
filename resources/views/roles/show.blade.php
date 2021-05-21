@extends('layouts.dashboard')
@section('pageheader')
    Roles Sistema
@endsection
@section('content')
<div class="col-md-12">
    <div class="card card">
        <div class="card-header bg-black">Ver Roles
        <div class="float-right">
            <a href="{{ route('roles.index') }}">
                <img src="{{ asset('adminlte/icons/back.png') }}" width="48px" title="volver"></a>
            </div>
        </div>
        <div class="card-body">
                    <p><strong>Nombre</strong>     {{ $role->name }}</p>
                    <p><strong>Url Amigable</strong>       {{ $role->slug }}</p>
                    <p><strong>Descripción</strong>  {{ $role->description }}</p>
        </div>
    </div>
</div>
@endsection
